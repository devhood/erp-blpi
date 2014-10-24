
var Customer = function () {

	return {

		init: function () {
			
			var form = $('#product_add');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                	companyName : {
                        minlength: 2,
                        required: true
                    },
                    branch : {
                        minlength: 2,
                        required: true
                    },
                    productCode : {
                        minlength: 2,
                        required: true
                    },
                    categoryId : {
                        required: true
                    },
                    customerTypeId : {
                        required: true
                    },
                    tradeName : {
                        minlength: 2,
                        required: true
                    },
                    tinNumber : {
                        minlength: 2,
                        required: true
                    },
                    phone : {
                        minlength: 2,
                        required: true
                    },
                    email : {
                        minlength: 2,
                        required: true,
                        email: true
                    },
                    website : {
                        minlength: 2,
                        required: true
                    },
                    secNumber : {
                        minlength: 2,
                        required: true
                    },
                    consignee: {
                        required: true
                    },
                    franchise: {
                        required: true
                    },
                    creditLimit: {
                        minlength: 2,
                        required: true
                    }, 
                    unpaidTransactionLimit: {
                        minlength: 2,
                        required: true
                    },
                    paymentTermId: {
                       required: true
                    },
                    percentCommission: {
                        minlength: 2,
                       required: true
                    },
                    shippingModeId: {
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