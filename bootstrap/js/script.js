//
//	jQuery Validate example script
//
//	Prepared by David Cochran
//
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions

		$('#contact-form').validate({
			rules: {
				name: {
					minlength: 2,
					required: true
				},
			email: {
				required: true,
				email: true
			},
			phone: {
				minlength: 10,
				maxlength: 12,
				number: true,
				required: true
			},
	    },
		highlight: function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		success: function(element) {
			element.closest('.form-group').removeClass('has-error');
		},
		errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
	  });

}); // end document.ready