var AjaxForm = {

	initialize: function(afConfig) {
		if(!jQuery().ajaxForm) {
			document.write('<script src="'+afConfig.assetsUrl+'js/lib/jquery.form.min.js"><\/script>');
		}
		if(!jQuery().jGrowl) {
			document.write('<script src="'+afConfig.assetsUrl+'js/lib/jquery.jgrowl.min.js"><\/script>');
		}

		$(document).ready(function() {
			$.jGrowl.defaults.closerTemplate = '<div>[ '+afConfig.closeMessage+' ]</div>';
		});

		$(document).on('submit', afConfig.formSelector, function(e) {
			$(this).ajaxSubmit({
				dataType: 'json'
				,data: {pageId: afConfig.pageId}
				,url: afConfig.actionUrl
				,beforeSerialize: function(form, options) {
					form.find(':submit').each(function() {
						if (!form.find('input[type="hidden"][name="' + $(this).attr('name') + '"]').length) {
							$(form).append(
								$('<input type="hidden">').attr({
									name: $(this).attr('name'),
									value: $(this).attr('value')
								})
							);
						}
					})
					
					form.find('[name="nomail"]').val('');
				}
				,beforeSubmit: function(fields, form) {
					if (typeof(afValidated) != 'undefined' && afValidated == false) {
						return false;
					}
					AjaxForm.Message.close();
					form.find('.error').html('');
					form.find('.error').removeClass('error');
					form.find('input,textarea,select,button').attr('disabled', true);
					return true;
				}
				,success: function(response, status, xhr, form) {
					form.find('input,textarea,select,button').attr('disabled', false);
					response.form=form;
					$(document).trigger('af_complete', response);
					if (!response.success) {
						AjaxForm.Message.error(form, response.message);
						if (response.data) {
							var key, value;
							for (key in response.data) {
								if (response.data.hasOwnProperty(key)) {
									value = response.data[key];
									form.find('.error_' + key).html(value).addClass('error');
									form.find('[name="' + key + '"]').addClass('error');
								}
							}
						}
					}
					else {
						AjaxForm.Message.success(form, response.message);
						form.find('.error').removeClass('error');
						form[0].reset();
					}
				}
			});
			e.preventDefault();
			return false;
		});

		$(document).on('reset', afConfig.formSelector, function(e) {
			$(this).find('.js-file').remove();
			$(this).find('.error').html('');
		});
	}

};


AjaxForm.Message = {
    alert: null,
    timeout: null,
	success: function(form, message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-success', sticky: sticky});
			
		    AjaxForm.Message.alert = $('<div class="uk-alert uk-alert-success" data-uk-alert><a href="#" class="uk-alert-close uk-close"></a>' + message + '</div>');
		    form.prepend(AjaxForm.Message.alert);
		    AjaxForm.Message.timeout = setTimeout(AjaxForm.Message.close, 5000);
		}
	},
	error: function(form, message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-error', sticky: sticky});
			
		    AjaxForm.Message.alert = $('<div class="uk-alert uk-alert-danger" data-uk-alert><a href="#" class="uk-alert-close uk-close"></a>' + message + '</div>');
		    form.prepend(AjaxForm.Message.alert);
		}
	},
	info: function(form, message, sticky) {
		if (message) {
			if (!sticky) {sticky = false;}
			$.jGrowl(message, {theme: 'af-message-info', sticky: sticky});

		    AjaxForm.Message.alert = $('<div class="uk-alert" data-uk-alert><a href="#" class="uk-alert-close uk-close"></a>' + message + '</div>');
		    form.prepend(AjaxForm.Message.alert);
		}
	},
	close: function() {
		$.jGrowl('close');
		
		if (AjaxForm.Message.timeout) {
    	    clearTimeout(AjaxForm.Message.timeout);
		}
		if (AjaxForm.Message.alert) {
    	    $('.uk-close', AjaxForm.Message.alert).click();
		}
	},
	valid: function(){
		$(this).nextAll(".error").remove();
	}
};

