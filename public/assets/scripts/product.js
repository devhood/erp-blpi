
var Product = function () {

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
                	productCode : {
                        minlength: 2,
                        required: true
                    },
                    productName : {
                        minlength: 2,
                        required: true
                    },
                    productCode : {
                        minlength: 2,
                        required: true
                    },
                    ClassificationId : {
                        required: true
                    },
                    BrandId : {
                        required: true
                    },
                    SupplierId : {
                        required: true
                    },
                    size : {
                        minlength: 1,
                        required: true
                    },
                    weight : {
                        minlength: 1,
                        required: true
                    },
                    productStatus : {
                        required: true
                    },
                    paymentTermId : {
                        required: true
                    },
                    partNumber : {
                        minlength: 2,
                        required: true
                    },
                    blCode : {
                        minlength: 2,
                        required: true
                    },
                    printedCode : {
                        minlength: 2,
                        required: true
                    },
                    priceTypeId : {
                        required: true
                    },
                    productDescription : {
                        required: true
                    },
                },
                messages: { // custom messages for radio buttons and checkboxes
                	productCode: {
                        required: "Product Code is Required"
                    },
                    productName: {
                        required: "Product Name is required"
                    }
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