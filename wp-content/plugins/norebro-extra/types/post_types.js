!function($) {
	$('#vc_ui-panel-edit-element .norebro_extra_post_types_block select').select2({
		maximumSelectionLength: 5,
		placeholder: 'All categories'
	});

	$('#vc_ui-panel-edit-element').on('change', '.norebro_extra_post_types_block select', function(e){
		var $input = $(this);
		var $value_hidden_input = $(this).closest('.norebro_extra_post_types_block').find('input.wpb_vc_param_value');
		$value_hidden_input.val( ( $input.val() ? $input.val().join(',') : '' ) ).trigger('change');
	});

}(window.jQuery);