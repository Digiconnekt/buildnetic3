(function($) {
  "use strict";

  var methods = {
    t: function(text) {
      return typeof(this.i18n[text]) != 'undefined' ? this.i18n[text] : text;
    },

    containerClasses: function() {
      return {
        'sd-packages': true,
        'sd-clearfix': true,
        'sd-working': this.state.package != false
      }
    },

    packageClasses: function(p) {
      return {
        'sd-package': true,
        'sd-package-active': this.state.package == p
      }
    },

    taskClasses: function(t) {
      return {
        'sd-task': true,
        'sd-task-working': this.state.working == t.id,
        'sd-task-completed': this.completedTasks.indexOf(t.id) != -1
      }
    },

    start: function(p) {
      this.state.package = p;
      this.completedTasks = [];
      
      $.when(
        this.download()
          .then(this.import)
          .then(this.thumbnails)
      ).then(this.finish);
    },

    request: function(action, workingState, data, overriden) {
      var defaults = {
        method:   'post',
        dataType: 'json',
        
        data: $.extend(true, {
          'action': action
        }, data),

        beforeSend: (function(context) {
          context.state.working = workingState;
        })(this)
      };

      return $.ajax(
        this.ajaxUrl,
        $.extend(true, defaults, overriden)
      );
    },

    download: function() {
      return this
        .request('sd_download', 'download', {
          file: this.state.package.file
        })
        .then((function(response) {
          this.completedTasks.push('download');
        }).bind(this));
    },

    import: function() {
      return this
        .request('sd_import', 'import', {
          file: this.state.package.file
        })
        .then((function(response) {
          this.completedTasks.push('import');
        }).bind(this));
    },

    thumbnails: function() {
      return this
        .request('sd_thumbnails', 'thumbnails')
        .then((function(response) {
          this.completedTasks.push('thumbnails');
        }).bind(this));
    },

    finish: function() {
      $.ajax(this.ajaxUrl, {
        method: 'post',
        data: {
          action: 'sd_finish',
          package: this.state.package
        },
        dataType: 'json'
      }).then((function(response) {
        this.installedPackage = $.extend(true, {}, this.state.package);
        this.state.working = false;
        this.state.package = false;
      }).bind(this));
    }
  };

  var app = Vue.extend({
    el: '#sd-installer',
    template: '#tmpl-sd-installer',
    methods: methods
  });

  /**
   * Initialize the sample data installer
   */
  $(function() {
    new app({
      data: function() {
        return {
          ajaxUrl: ajaxurl,
          i18n: _sampleDataI18n,
          info: _sampleDataInfo,
          state: {
            working: false,
            package: false
          },
          responses: {},
          completedTasks: [],
          installedPackage: [],
          tasks: [{
            id: 'download',
            caption: 'Download sample data package'
          }, {
            id: 'import',
            caption: 'Import sample content'
          }, {
            id: 'thumbnails',
            caption: 'Regenerate attachment thumbnails'
          }]
        }
      }
    });
  });
})(jQuery);
