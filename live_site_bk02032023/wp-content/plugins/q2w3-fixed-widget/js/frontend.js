'use strict';

var extendStatics = function(d, b) {
    extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
    return extendStatics(d, b);
};
function __extends(d, b) {
    if (typeof b !== "function" && b !== null)
        throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
    extendStatics(d, b);
    function __() { this.constructor = d; }
    d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
}
var __assign = function() {
    __assign = Object.assign || function __assign(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
        }
        return t;
    };
    return __assign.apply(this, arguments);
};

var reactive = function (getter, interval) {
    if (interval === void 0) { interval = 300; }
    var subs = [];
    var v = getter();
    setInterval(check, interval);
    function check() {
        if (subs.length === 0) {
            return;
        }
        var new_v = getter();
        if (v === new_v) {
            return;
        }
        v = new_v;
        for (var _i = 0, subs_1 = subs; _i < subs_1.length; _i++) {
            var update = subs_1[_i];
            update(new_v);
        }
    }
    return {
        get val() {
            return v;
        },
        on_change: function (update) {
            update(v);
            subs.push(update);
        }
    };
};

var StaticOffsets = (function () {
    function StaticOffsets(el, user_margins, get_root_offset, need_to_calc_offset, get_prev_sibling) {
        if (el === void 0) { el = null; }
        if (user_margins === void 0) { user_margins = {}; }
        if (get_root_offset === void 0) { get_root_offset = function () { return Math.round(scrollY + (_this.el ? _this.el.getBoundingClientRect().top : 0)); }; }
        if (need_to_calc_offset === void 0) { need_to_calc_offset = function () { return false; }; }
        if (get_prev_sibling === void 0) { get_prev_sibling = function () { return null; }; }
        var _this = this;
        this.el = el;
        this.user_margins = user_margins;
        this.get_root_offset = get_root_offset;
        this.need_to_calc_offset = need_to_calc_offset;
        this.get_prev_sibling = get_prev_sibling;
        this.root = 0;
        this.top = 0;
        this.get_top_offset = function () {
            return _this.get_sibilings_offset(_this.get_prev_sibling, _this.get_prev_sibling(_this.el), _this.user_margins.margin_top);
        };
        reactive(this.get_root_offset).on_change(function (root) {
            _this.root = root;
        });
        reactive(this.get_top_offset).on_change(function (top) {
            _this.top = top;
        });
    }
    StaticOffsets.prototype.get_sibilings_offset = function (next, el, offset) {
        if (offset === void 0) { offset = 0; }
        if (!el) {
            return offset;
        }
        if (!this.need_to_calc_offset(el)) {
            return this.get_sibilings_offset(next, next(el), offset);
        }
        var _a = getComputedStyle(el), marginTop = _a.marginTop, marginBottom = _a.marginBottom;
        return this.get_sibilings_offset(next, next(el), offset + el.getBoundingClientRect().height + parseInt(marginTop || '0') + parseInt(marginBottom || '0'));
    };
    return StaticOffsets;
}());
var DynamicOffsets = (function (_super) {
    __extends(DynamicOffsets, _super);
    function DynamicOffsets(el, user_margins, get_root_offset, need_to_calc_offset, get_prev_sibling, get_next_sibling) {
        if (el === void 0) { el = null; }
        if (user_margins === void 0) { user_margins = {}; }
        if (need_to_calc_offset === void 0) { need_to_calc_offset = function () { return false; }; }
        if (get_prev_sibling === void 0) { get_prev_sibling = function () { return null; }; }
        if (get_next_sibling === void 0) { get_next_sibling = function () { return null; }; }
        var _this = _super.call(this, el, user_margins, get_root_offset, need_to_calc_offset, get_prev_sibling) || this;
        _this.get_next_sibling = get_next_sibling;
        _this.bottom = 0;
        _this.max_top_offset = 0;
        _this.relative_top = 0;
        _this.height = 0;
        _this.position = { top: 0, bottom: 0 };
        _this.border_box = 0;
        _this.get_height = function () {
            return !_this.el ? 0 :
                Math.round(Math.max(_this.el.clientHeight, _this.el.scrollHeight, _this.el.getBoundingClientRect().height));
        };
        _this.get_bottom_offset = function () {
            return _this.get_sibilings_offset(_this.get_next_sibling, _this.get_next_sibling(_this.el), _this.user_margins.margin_bottom);
        };
        reactive(_this.get_height).on_change(function (height) {
            _this.height = height;
            _this.border_box = _this.get_border_box();
            _this.position = _this.get_position();
            _this.relative_top = _this.get_relative_top();
        });
        reactive(_this.get_bottom_offset).on_change(function (bottom) {
            _this.bottom = bottom;
            _this.relative_top = _this.get_relative_top();
        });
        return _this;
    }
    DynamicOffsets.prototype.setMaxOffset = function (max_top_offset) {
        this.max_top_offset = max_top_offset;
        this.relative_top = this.get_relative_top();
    };
    DynamicOffsets.prototype.get_position = function () {
        if (!this.el || !this.el.parentElement) {
            return { top: 0, bottom: 0 };
        }
        return {
            top: this.el.offsetTop,
            bottom: this.el.parentElement.clientHeight - this.el.offsetTop - this.border_box
        };
    };
    DynamicOffsets.prototype.get_border_box = function () {
        if (!this.el) {
            return 0;
        }
        var _a = getComputedStyle(this.el), marginTop = _a.marginTop, marginBottom = _a.marginBottom;
        return this.height + parseInt(marginTop) + parseInt(marginBottom);
    };
    DynamicOffsets.prototype.get_relative_top = function () {
        return this.max_top_offset - this.border_box - this.bottom;
    };
    return DynamicOffsets;
}(StaticOffsets));

var StopWidgetClassName = 'FixedWidget__stop_widget';
var FixedWidgetClassName = 'FixedWidget__fixed_widget';
var Widget = (function () {
    function Widget(el) {
        var _this = this;
        this.el = el;
        this.get_root_offset = function () { return Math.round(scrollY + (_this.el ? _this.el.getBoundingClientRect().top : 0)); };
        this.need_to_calc_el_offset = function (_) { return false; };
        this.offsets = new StaticOffsets();
    }
    Widget.prototype.render = function () {
        throw new Error('Method is not overridden!');
    };
    Widget.prototype.mount = function (user_margins) {
        if (user_margins === void 0) { user_margins = {}; }
        if (!this.el || !this.el.parentElement) {
            return;
        }
        this.offsets = new StaticOffsets(this.el, user_margins, this.get_root_offset);
    };
    Widget.prototype.getElement = function () {
        return this.el;
    };
    Widget.prototype.toString = function () {
        var _a;
        return "".concat((_a = this.el) === null || _a === void 0 ? void 0 : _a.innerHTML);
    };
    Widget.queryAllWidgetsContainers = function (className) {
        return []
            .concat(Array.from(document.querySelectorAll(".".concat(className))), Array.from(document.querySelectorAll("[data-fixed_widget=".concat(className))))
            .map(function (el) {
            el.classList.remove(className);
            el.removeAttribute('data-fixed_widget');
            var container = getWidgetContainer(el);
            container.classList.remove(FixedWidgetClassName);
            container.classList.remove(StopWidgetClassName);
            return container;
        });
    };
    Widget.from = function (root, className) {
        var _this = this;
        var elements = [];
        try {
            elements = Array.from(root.querySelectorAll(":scope > .".concat(className)));
        }
        catch (_e) {
            elements = Array.from(root.children).filter(function (e) { return e.classList.contains(className); });
        }
        return elements
            .filter(function (el) { return el !== null; })
            .map(function (e) { return new _this(e); });
    };
    return Widget;
}());
var getWidgetContainer = function (el) {
    return el.parentElement && (el.parentElement.childElementCount === 1 ||
        el.parentElement.classList.toString().includes('wp-block-group') ||
        el.parentElement.classList.toString().includes('wp-block-column') ||
        el.parentElement.classList.contains('widget')) ? getWidgetContainer(el.parentElement) : el;
};

var findIntersections = function (arr1, arr2) {
    return [
        arr2.filter(function (e) { return !arr1.includes(e); }),
        arr1.filter(function (e) { return arr2.includes(e); }),
    ];
};
var splitSelectors = function (s) {
    if (s === void 0) { s = ''; }
    return s.replace(/[\r\n]|[\r]/gi, '\n')
        .split('\n')
        .map(function (s) { return s.trim(); })
        .filter(function (s) { return s !== ''; });
};
var compatabilty_FW_v5 = function (selectors) {
    if (selectors === void 0) { selectors = []; }
    if (selectors.some(function (s) { return !/^[a-z]/i.test(s); })) {
        return selectors;
    }
    return selectors.concat(selectors.map(function (s) { return "#".concat(s); }));
};

var queryElements = function (selectors) {
    if (selectors === void 0) { selectors = []; }
    return Array.from((selectors)
        .map(function (selector) { return Array.from(document.querySelectorAll(selector)); }))
        .reduce(function (all, elements) { return all.concat(elements); }, [])
        .filter(function (e) { return e instanceof HTMLElement; });
};
function findWithProperty(el, predicate) {
    if (!el || el === document.body) {
        return null;
    }
    if (predicate(getComputedStyle(el))) {
        return el;
    }
    return findWithProperty(el.parentElement, predicate);
}

var PositionWidget = (function (_super) {
    __extends(PositionWidget, _super);
    function PositionWidget() {
        var _this = _super !== null && _super.apply(this, arguments) || this;
        _this.offsets = new DynamicOffsets();
        _this.get_prev_sibling = function (el) {
            return el
                && !el.classList.contains(StopWidgetClassName)
                && el.previousElementSibling
                || null;
        };
        _this.get_next_sibling = function (el) { return el && !el.classList.contains(StopWidgetClassName) ? el.nextElementSibling : null; };
        return _this;
    }
    PositionWidget.prototype.mount = function (user_margins) {
        _super.prototype.mount.call(this, user_margins);
        if (!this.el || !this.el.parentElement) {
            return;
        }
        this.offsets = new DynamicOffsets(this.el, user_margins, this.get_root_offset, this.need_to_calc_el_offset, this.get_prev_sibling, this.get_next_sibling);
    };
    PositionWidget.prototype.setMaxOffset = function (max_top_offset) {
        this.offsets.setMaxOffset(max_top_offset);
    };
    PositionWidget.prototype.render = function () {
        this.on_scroll(scrollY);
    };
    PositionWidget.from = function (root) {
        return _super.from.call(this, root, FixedWidgetClassName);
    };
    PositionWidget.prototype.on_scroll = function (_scroll_top) {
        throw new Error('Method is not overridden!');
    };
    return PositionWidget;
}(Widget));

var FixedWidget = (function (_super) {
    __extends(FixedWidget, _super);
    function FixedWidget(el) {
        var _this = _super.call(this, el) || this;
        _this.is_pinned = false;
        _this.init_style = {
            position: 'static',
            marginBottom: '',
            marginTop: '',
            padding: '',
            height: '',
            width: '',
        };
        _this.get_root_offset = function () {
            var element = _this.is_pinned ? _this.clone_el : _this.el;
            var new_root_offset = Math.round(scrollY + (element ? element.getBoundingClientRect().top : 0));
            return _this.is_pinned ? new_root_offset : Math.max(_this.offsets.root, new_root_offset);
        };
        _this.need_to_calc_el_offset = function (el) {
            return el.classList.contains(FixedWidgetClassName);
        };
        if (!_this.el || !_this.el.parentElement) {
            return _this;
        }
        _this.el.classList.add(FixedWidgetClassName);
        return _this;
    }
    FixedWidget.prototype.mount = function (margins) {
        var _this = this;
        _super.prototype.mount.call(this, margins);
        if (!this.el) {
            return;
        }
        this.store_style(getComputedStyle(this.el));
        this.clone();
        reactive(function () { return _this.offsets.height; }).on_change(function (height) {
            if (_this.clone_el) {
                _this.clone_el.style.height = "".concat(height, "px");
            }
        });
    };
    FixedWidget.prototype.setMaxOffset = function (max_top_offset) {
        if (max_top_offset === 0 ||
            max_top_offset < this.offsets.root ||
            this.offsets.max_top_offset === max_top_offset) {
            return;
        }
        this.offsets.setMaxOffset(max_top_offset);
    };
    FixedWidget.prototype.clone = function () {
        var _this = this;
        if (!this.el || !this.el.parentElement || this.clone_el) {
            return;
        }
        this.clone_el = this.el.cloneNode(false);
        this.clone_el.getAttributeNames().forEach(function (attr) {
            _this.clone_el.removeAttribute(attr);
        });
        for (var prop in this.init_style) {
            this.clone_el.style[prop] = this.init_style[prop];
        }
        this.clone_el.style.display = 'none';
        this.el.parentElement.insertBefore(this.clone_el, this.el);
    };
    FixedWidget.prototype.store_style = function (style) {
        this.init_style.position = style.position;
        this.init_style.marginTop = style.marginTop;
        this.init_style.marginBottom = style.marginBottom;
        this.init_style.padding = style.padding;
        this.init_style.width = style.width;
        this.init_style.height = style.height;
    };
    FixedWidget.prototype.restore_style = function (style) {
        if (!this.is_pinned) {
            return;
        }
        this.is_pinned = false;
        style.position = this.init_style.position;
        if (this.clone_el) {
            this.clone_el.style.display = 'none';
        }
    };
    FixedWidget.prototype.on_scroll = function (scroll_top) {
        if (!this.el) {
            return;
        }
        var need_to_fix = scroll_top > this.offsets.root - this.offsets.top;
        var limited_by_stop_element = this.offsets.max_top_offset !== 0 && scroll_top > this.offsets.relative_top - this.offsets.top;
        var top = limited_by_stop_element ? this.offsets.relative_top - scroll_top : this.offsets.top;
        need_to_fix ?
            this.fix(top) :
            this.restore_style(this.el.style);
    };
    FixedWidget.prototype.fix = function (top) {
        if (!this.el) {
            return;
        }
        this.el.style.top = "".concat(top, "px");
        if (this.is_pinned) {
            return;
        }
        this.is_pinned = true;
        this.el.style.position = 'fixed';
        this.el.style.transition = 'transform 0.5s';
        this.el.style.width = this.init_style.width;
        this.el.style.padding = this.init_style.padding;
        if (!this.clone_el) {
            return;
        }
        this.clone_el.style.display = 'block';
    };
    FixedWidget.new = function (selector) {
        return new FixedWidget(document.querySelector(selector));
    };
    FixedWidget.is = function (selector) {
        var el = document.querySelector(selector);
        return !!el && el.classList.contains(FixedWidgetClassName);
    };
    return FixedWidget;
}(PositionWidget));

var StickyWidget = (function (_super) {
    __extends(StickyWidget, _super);
    function StickyWidget(el) {
        var _this = _super.call(this, el) || this;
        _this.borderBox = 0;
        _this.margins = 0;
        _this.need_to_calc_el_offset = function (el) {
            return el.classList.contains(FixedWidgetClassName);
        };
        if (!_this.el || !_this.el.parentElement) {
            return _this;
        }
        _this.el.classList.add(FixedWidgetClassName);
        return _this;
    }
    StickyWidget.prototype.mount = function (margins) {
        _super.prototype.mount.call(this, margins);
        if (!this.el || !this.el.parentElement) {
            return;
        }
        this.el.style.position = 'sticky';
        this.el.style.position = '-webkit-sticky';
        this.el.style.transition = 'transform 0s';
        this.el.style.boxSizing = 'border-box';
    };
    StickyWidget.prototype.setMaxOffset = function (max_top_offset) {
        if (!this.el || !this.el.parentElement) {
            return;
        }
        if (max_top_offset < this.el.offsetTop) {
            return;
        }
        this.offsets.setMaxOffset(max_top_offset);
    };
    StickyWidget.prototype.on_scroll = function () {
        if (!this.el || !this.el.parentElement) {
            return;
        }
        var bottom = this.offsets.max_top_offset ?
            Math.min(this.offsets.max_top_offset - (this.el.parentElement.clientHeight - this.offsets.position.bottom), this.offsets.bottom)
            : this.offsets.bottom;
        this.el.style.top = "".concat(this.offsets.top, "px");
        if (bottom >= this.offsets.bottom) {
            this.el.style.transform = "translateY(0px)";
            return;
        }
        this.el.style.transform = "translateY(".concat(bottom - this.offsets.bottom, "px)");
    };
    StickyWidget.new = function (selector) {
        return new StickyWidget(document.querySelector(selector));
    };
    StickyWidget.is = function (selector) {
        var el = document.querySelector(selector);
        return !!el && el.classList.contains(FixedWidgetClassName);
    };
    return StickyWidget;
}(PositionWidget));

var StopWidget = (function (_super) {
    __extends(StopWidget, _super);
    function StopWidget(el) {
        var _this = _super.call(this, el) || this;
        _this.need_to_calc_el_offset = function () { return true; };
        if (!_this.el || !_this.el.parentElement) {
            return _this;
        }
        _this.el.classList.add(StopWidgetClassName);
        return _this;
    }
    StopWidget.new = function (selector) {
        return new StopWidget(document.querySelector(selector));
    };
    StopWidget.is = function (selector) {
        var el = document.querySelector(selector);
        return !!el && el.classList.contains(StopWidgetClassName);
    };
    StopWidget.from = function (root) {
        return _super.from.call(this, root, StopWidgetClassName);
    };
    return StopWidget;
}(Widget));

var Sidebar = (function () {
    function Sidebar(el, margins, use_sticky_position) {
        if (use_sticky_position === void 0) { use_sticky_position = false; }
        var _this = this;
        this.el = el;
        this.margins = margins;
        this.widgets = [];
        this.stop_widgets = [];
        this.isSticky = false;
        this.setWidgetsMaxOffset = function (max_offset) {
            for (var _i = 0, _a = _this.widgets; _i < _a.length; _i++) {
                var widget = _a[_i];
                widget.setMaxOffset(max_offset);
            }
        };
        var isDeprecatedFloatMarkup = !!findWithProperty(this.el, function (style) { return style.float !== 'none'; });
        var isOverflowHiddenMarkup = !!findWithProperty(this.el, function (style) { return style.overflow === 'hidden'; });
        var isFallbackToSticky = (isDeprecatedFloatMarkup || isOverflowHiddenMarkup) && use_sticky_position;
        isFallbackToSticky && console.log('Fixed Widget: fallback to position sticky');
        this.isSticky =
            !isDeprecatedFloatMarkup &&
                !isOverflowHiddenMarkup &&
                use_sticky_position;
        var WidgetContructor = this.isSticky ? StickyWidget : FixedWidget;
        this.stop_widgets = StopWidget.from(this.el);
        this.widgets = WidgetContructor.from(this.el);
        if (!this.isSticky) {
            return;
        }
        this.el.style.position = 'relative';
        if (this.stop_widgets.length !== 0) {
            return;
        }
        this.el.style.minHeight = '100%';
    }
    Sidebar.prototype.mount = function () {
        var _this = this;
        this.stop_widgets.forEach(function (widget) { widget.mount(); });
        this.widgets.forEach(function (widget) { widget.mount(_this.margins); });
    };
    Sidebar.prototype.setMaxOffset = function (general_stop_widgets) {
        var is_local_stop_widgets = this.stop_widgets.length != 0;
        var use_top_offset = this.isSticky && is_local_stop_widgets;
        var stop_widgets = is_local_stop_widgets ? this.stop_widgets : general_stop_widgets;
        var max_top_offset = reactive(function () {
            if (stop_widgets.length === 0) {
                return Math.round(document.body.scrollHeight);
            }
            var min_offset = use_top_offset ?
                stop_widgets[0].offsets.top :
                stop_widgets[0].offsets.root;
            for (var _i = 0, stop_widgets_1 = stop_widgets; _i < stop_widgets_1.length; _i++) {
                var widget = stop_widgets_1[_i];
                var offset = use_top_offset ? widget.offsets.top : widget.offsets.root;
                if (min_offset > offset) {
                    min_offset = offset;
                }
            }
            return Math.round(min_offset);
        });
        max_top_offset.on_change(this.setWidgetsMaxOffset);
        this.setWidgetsMaxOffset(max_top_offset.val);
    };
    Sidebar.prototype.render = function () {
        for (var _i = 0, _a = this.widgets; _i < _a.length; _i++) {
            var widget = _a[_i];
            widget.render();
        }
    };
    return Sidebar;
}());

var Sidebars = (function () {
    function Sidebars(elements, options) {
        var _this = this;
        this.data = [];
        this.render = function () {
            for (var _i = 0, _a = _this.data; _i < _a.length; _i++) {
                var sidebar = _a[_i];
                sidebar.render();
            }
        };
        this.data = Array.from(new Set(elements.map(function (widget) { return widget.parentElement; })))
            .filter(function (sidebar_el) { return sidebar_el !== null; })
            .map(function (sidebar_el) { return new Sidebar(sidebar_el, { margin_bottom: options.margin_bottom, margin_top: options.margin_top }, options.use_sticky_position); });
    }
    Sidebars.prototype.mount = function () {
        this.data.forEach(function (sidebar) { sidebar.mount(); });
        this.setMaxOffset();
    };
    Sidebars.prototype.setMaxOffset = function () {
        var general_stop_widgets = this.getGeneralStopElements();
        for (var _i = 0, _a = this.data; _i < _a.length; _i++) {
            var sidebar = _a[_i];
            sidebar.setMaxOffset(general_stop_widgets);
        }
    };
    Sidebars.prototype.getGeneralStopElements = function () {
        return this.data.filter(function (sidebar) {
            return sidebar.isSticky ?
                sidebar.widgets.length === 0 :
                true;
        })
            .map(function (sidebar) { return sidebar.stop_widgets; })
            .reduce(function (all, widgets) { return all.concat(widgets); }, []);
    };
    Sidebars.new = function (options) {
        var fixedWidgetsContainers = Array.from(new Set(Widget
            .queryAllWidgetsContainers(FixedWidgetClassName)
            .concat(queryElements(compatabilty_FW_v5(options.widgets)))));
        var stopWidgetsSelectors = compatabilty_FW_v5(splitSelectors(options.stop_elements_selectors || options.stop_id));
        var stopWidgetsContainers = Array.from(new Set(Widget
            .queryAllWidgetsContainers(StopWidgetClassName)
            .concat(queryElements(stopWidgetsSelectors))));
        var _a = findIntersections(fixedWidgetsContainers, stopWidgetsContainers), stopWidgetsUniqContainers = _a[0], duplicates = _a[1];
        duplicates.forEach(function (w) {
            console.error("The Widget is detected as fixed block and stop block!\n".concat(w.innerHTML));
        });
        fixedWidgetsContainers.forEach(function (c) { c.classList.add(FixedWidgetClassName); });
        stopWidgetsUniqContainers.forEach(function (c) { c.classList.add(StopWidgetClassName); });
        return new Sidebars(fixedWidgetsContainers.concat(stopWidgetsUniqContainers), options);
    };
    return Sidebars;
}());

var sidebars;
var initPlugin = function (options) {
    if (options === void 0) { options = []; }
    if (sidebars) {
        sidebars.render();
        return;
    }
    sidebars = Sidebars.new(options.reduce(function (prev, cur) { return (__assign(__assign(__assign({}, prev), cur), { widgets: prev.widgets.concat(cur.widgets || []) })); }, { widgets: [] }));
    document.addEventListener('scroll', sidebars.render);
    sidebars.mount();
};

window.addEventListener('load', onDocumentLoaded);
document.readyState === "complete" && onDocumentLoaded();
onDocumentLoaded();
function onDocumentLoaded() {
    var admin_panel = document.querySelector('#wpadminbar');
    var user_options = window['q2w3_sidebar_options'] || [{}];
    var options = user_options.map(function (option) {
        option.margin_top = (option.margin_top || 0) + (admin_panel && admin_panel.clientHeight || 0);
        return option;
    });
    if (options.some(function (option) {
        return window.innerWidth < option.screen_max_width ||
            window.innerHeight < option.screen_max_height;
    })) {
        return;
    }
    initPlugin(options);
}
