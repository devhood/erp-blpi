
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
                	sono : {
                        minlength: 2,
                        required: true
                    },
                    transactionTypeId : {
                        minlength: 2,
                        required: true
                    },
                    customerId : {
                        minlength: 2,
                        required: true
                    },
                    inventoryLocationId : {
                        required: true
                    },
                    addressId : {
                        required: true
                    },
                    addressId : {
                        required: true
                    },
                    orderSourceId : {
                        minlength: 1,
                        required: true
                    },
                    shippingModeId : {
                        minlength: 1,
                        required: true
                    },
                    userId : {
                        required: true
                    },
                    paymentTermId : {
                        required: true
                    },
                    deliveryDate : {
                        minlength: 2,
                        required: true
                    },
                    orderedBy : {
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
                    percentVat : {
                        required: true
                    },
                    notes : {
                        required: false
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
