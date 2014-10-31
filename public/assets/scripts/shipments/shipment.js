
var Shipments = function () {

	return {

		init: function () {

			var form = $('#shipment_add');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					shipmentId : {
						minlength: 3,
						required: true
					},
					supplierId : {
						minlength: 5,
						required: true
					},
					referenceNo : {
						required: true
					},

					arrivalDate : {
						minlength: 3,
						required: true
					},
					notes : {
						minlength: 10,
						required: true
					},
					confirmedBy : {
						minlength: 5,
						required: true
					},
					approveBy : {
						minlength: 5,
						required: true
					},
					

				},

					messages: { // custom messages for radio buttons and checkboxes

						shipmentId : {
							minlength: "Minimum of 3 Characters",
							required:  "Shipment ID is Required"
						},
						supplierId : {
							minlength: "Minimum of 5 Characters",
							required: "Supplier ID is Required"
						},
						referenceNo : {
							required: "Reference number is Required"
						},
						shipmentStatus : {
							minlength: "Minimum of 5 Characters",
							required: "Shipment status is Required"
						},

						arrivalDate : {
							minlength: "Minimum of 3 Characters",
							required: "Arrival date Required"
						},
						notes : {
							minlength: "Minimum of 5 Characters",
							required: "Notes is Required"
						},
						confirmedBy : {
							minlength: "Minimum of 5 Characters",
							required: "Confirmed By is Required"
						},
						approveBy : {
							minlength: "Minimum of 5 Characters",
							required: "Approve By is Required"
							},
						
						


					},
					invalidHandler: function (event, validator) { //display error alert on form subm
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
		//				var oTable = $(#itemsTable).dataTable();
			//			var data = oTable.fn
						form.submit();
					}
				});



			}
		};

	}();
