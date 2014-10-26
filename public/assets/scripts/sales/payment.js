
var Payment = function () {

	return {

		init: function () {

			var form = $('#sales_payment');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					// paymentNo : {
					// 	minlength: 2,
					// 	required: true
					// },
					// proformaInvoiceNo : {
					// 	minlength: 2,
					// 	required: true
					// },
					// cmNo : {
					// 	required: true
					// },
					// rmrNo : {
					// 	required: true
					// },
					// drNo : {
					// 	minlength: 1,
					// 	required: true
					// },
					// drNo : {
					// 	minlength: 1,
					// 	required: true
					// },
					// siNo : {
					// 	required: true
					// },
					// soNo : {
					// 	required: true
					// },
					transactionTypeId : {
						minlength: 2,
						required: true
					},
					customerId : {
						minlength: 2,
						required: true
					},
					deliveryDateId : {
						minlength: 2,
						required: true
					},

					vatPercentageId : {
						required: true
					},
					items : {
						required: true
					},
					sales : {
						required: false
					},
					transactionTypeId : {
						required: false
					},

				},

					messages: { // custom messages for radio buttons and checkboxes
						// paymentNo: {
						// 	required: "Payment Number is Required"
						// },
						// proformaInvoiceNo : {
						// 	required: "Proforma Invoice Number is Required"
						// },
						// cmNo : {
						// 	required: "cmNo is Required"
						// },
						// rmrNo : {
						// 	required: "rmrNo is Required"
						// },
						// drNo : {
						// 	required: "drNo is Required"
						// },
						// drNo : {
						// 	required: "drNo is Required"
						// },
						// siNo : {
						// 	required: "siNo is Required"
						// },
						// soNo : {
						// 	required: "soNo is Required"
						// },
						transactionTypeId : {
							required: "Transaction Type is Required"
						},
						customerId : {
							required: "Customer is Required"
						},
						deliveryDateId : {
							required: "Delivery Dateis Required"
						},
						vatPercentageId : {
							required: "Vat Percentage is Required"
						},
						items : {
							required: "Items is Required"
						},
						sales : {
							required: "Sales is Required"
						},
						transactionTypeId : {
							required: "Transaction Type is Required"
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
