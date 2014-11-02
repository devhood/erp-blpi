
var Order = function () {

	return {

		init: function () {

			var form = $('#order_add');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					"transactionType[transactionTypeId]" : {
						required: true
					},
					
					"customer[customerId]" : {
						required: true
					},
					
					"inventoryLocation[locationId]" : {
						required: true
					},
					
					"salesExecutive[userId]" : {
						required: true
					},
					
					"shippingAddress[addressId]" : {
						required: true
					},
					
					"billingAddress[addressId]" : {
						required: true
					},
					
					"orderSource[orderSourceId]" : {
						required: true
					},
					
					"shippingMode[shippingModeId]" : {
						required: true
					},

					orderedBy : {
						minlength: 2,
						required: true
					},
				},

					messages: { // custom messages for radio buttons and checkboxes
						"transactionType[transactionTypeId]" : {
							required: "Transaction Type is required!"
						},
						
						"customer[customerId]" : {
							required: "Customer is required!"
						},
						
						"inventoryLocation[locationId]" : {
							required: "Inventory Location is required!"
						},
						
						"salesExecutive[userId]" : {
							required: "Sales Executive is required!"
						},
						
						"shippingAddress[addressId]" : {
							required: "Shipping Address is required!"
						},
						
						"billingAddress[addressId]" : {
							required: "Billing Address is required!"
						},
						
						"orderSource[orderSourceId]" : {
							required: "Order Source is required!"
						},
						
						"shippingMode[shippingModeId]" : {
							required: "Delivery Method is required!"
						},

						orderedBy : {
							minlength: "Type atleast 2 characters!",
							required: "Ordered By is required!"
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
						form.submit();
					}
				});
			}
		};

	}();
