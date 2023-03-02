jQuery(function($){
	$('.duplica-help-heading').click(function(e){
		var $this = $(this);
		var $target = $this.data('target');
		$('.duplica-help-text:not('+$target+')').slideUp();
		if($($target).is(':hidden')){
			$($target).slideDown();
		}
		else {
			$($target).slideUp();
		}
	});

	$('.duplica-duplicate .ab-item').click(function(e){
		e.preventDefault();
		$('#duplica-modal').show();
		var $post_type = $(this).attr('href').replace('#','');
		var $post_id = $(this).closest('tr').attr('id').replace('post-','');
		$.ajax({
			url: DUPLICA.ajaxurl,
			type: 'POST',
			dataType: 'JSON',
			data: { action: 'duplica-duplicate', _wpnonce: DUPLICA._wpnonce, post_id: $post_id, post_type: $post_type },
			success: function(resp) {
				console.log(resp);
				$('#duplica-modal').hide();
				if( resp.status == 1 && resp.redirect != false ) {
					window.location.href = resp.redirect;
				}
			},
			error: function(err) {
				$('#duplica-modal').hide();
			}
		});
	});

	$('a.duplicate').click(function(e){
		e.preventDefault();
		$('#duplica-modal').show();
		var url = $(this).attr('href');
		$.ajax({
			url: url,
			type: 'POST',
			dataType: 'JSON',
			data: {},
			success: function(resp) {
				console.log(resp);
				if( resp.status == 1 && resp.redirect != false ) {
					window.location.href = '';
				}
			},
			error: function(err) {
				$('#duplica-modal').hide();
			}
		});
	});
})