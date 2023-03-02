jQuery(function($){
	$('.duplica-duplicate > .ab-item').click(function(e){
		e.preventDefault();
		$('#duplica-modal').show();
		var $post_type = $(this).attr('href').replace('#','');
		$.ajax({
			url: DUPLICA.ajaxurl,
			type: 'POST',
			dataType: 'JSON',
			data: { action: 'duplica-duplicate', _wpnonce: DUPLICA._wpnonce, post_id: DUPLICA.post_id, post_type: $post_type },
			success: function(resp) {
				console.log(resp);
				$('#duplica-modal').hide();
				if( resp.status == 1 && resp.redirect != false ) {
					window.location.href = resp.redirect;
				}
			},
			error: function(err) {
				$('#duplica-modal').hide();
				// console.log(err);
			}
		});
	});
})