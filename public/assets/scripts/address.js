
var Address = function () {

	return {

		init: function () {
			
			var form = $('#customer_address');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                	addressType : {
                        required: true
                    },
                    
                    streetLandmark : {
                        required: true
                    },
                    
                    cityId : {
                        required: true
                    },
                    
                    provinceId : {
                        required: true
                    },
                    
                    countryId : {
                        required: true
                    },
                    
                    zipcode : {
                        minlength: 2,
                        required: true
                    },
  
                },
                invalidHandler: function (event, validator) { //display error alert on form submit              
                success.hide();
                error.show();
                    App.scrollTo(error, -200);
                },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function (form) {
                success.show();
                error.hide();
            }
			});
		}
	};

}();