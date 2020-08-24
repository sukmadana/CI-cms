var BaseFormValidation = function() {
    // Init Bootstrap Forms Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function() {
        jQuery('.js-validation-bootstrap').validate({
            ignore: [],
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                var elem = jQuery(e);

                elem.closest('.form-group').removeClass('has-error').addClass('has-error');
                elem.closest('.help-block').remove();
            },
            success: function(e) {
                var elem = jQuery(e);

                elem.closest('.form-group').removeClass('has-error');
                elem.closest('.help-block').remove();
            },
            rules: {
                'company_email': {
                    email: true
                },
                'company_logo_url': {
                    url: true
                },
                'company_phone': {
                    digits: true
                }
            },
            messages: {

                'company_email': 'Please enter a valid email address',
                'company_logo': 'Please enter your photo url ( include http:// or https:// )!',
                'company_phone': 'Please enter only digits!',
            }
        });
    };

    return {
        init: function() {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();


        }
    };
}();

// Initialize when page loads
jQuery(function() { BaseFormValidation.init(); });