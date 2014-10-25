
var AccessList = function () {

	return {

		init: function () {

			var form = $('#accesslist');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					accessName : {
						minlength: 3,
						required: true
					},
					pemission : {
						minlength: 5,
						required: true


		},
			},

					messages: { // custom messages for radio buttons and checkboxes

						accessName : {
							minlength: "Minimum of 3 Characters",
							required:  "Username is Required"
						},
						permission : {
							minlength: "Minimum of 5 Characters",
							required: "Fullname is Required"
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
