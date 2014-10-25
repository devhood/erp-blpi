
var Order = function () {

	return {

		init: function () {

			var form = $('#sales_order');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

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

					messages: { // custom messages for radio buttons and checkboxes
						transactionTypeId: {
							required: "Transaction Type is Required"
						},
						customerId: {
							required: "Customer is Required"
						},
						inventoryLocationId : {
							required: "Inventory Location is Required"
						},
						addressId : {
							required: "Address is Required"
						},
						orderSourceId : {
							minlength: 1,
							required: "Order Source is Required"
						},
						shippingModeId : {
							minlength: 1,
							required: "Shipping Mode is Required"
						},
						userId : {
							required: "User is Required"
						},
						paymentTermId : {
							required: "Payment Term is Required"
						},
						deliveryDate : {
							minlength: 2,
							required: "Delivery Date is Required"
						},
						orderedBy : {
							minlength: 2,
							required: "Ordered By is Required"
						},
						printedCode : {
							minlength: 2,
							required: "Printed Code is Required"
						},
						priceTypeId : {
							required: "Please select  at least 1 types of Service",
						},
						productDescription : {
							required: "Product Description is Required"
						},
						percentVat : {
							required: "Percent Vat is Required"
						},
						notes : {
							required: "Note is Required"
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
