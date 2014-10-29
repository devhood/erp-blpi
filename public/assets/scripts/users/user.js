
var User = function () {

	return {

		init: function () {

			var form = $('#user_add');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					userName : {
						minlength: 3,
						required: true
					},
					fullName : {
						minlength: 5,
						required: true
					},
					designationId : {
						required: true
					},
					password : {
						minlength: 5,
						required: true
					},

					userStatus : {
						minlength: 3,
						required: true
					},
					email : {
						minlength: 5,
						required: true
					},
					mobile : {
						minlength: 5,
						required: true
					},

				},

					messages: { // custom messages for radio buttons and checkboxes

						userName : {
							minlength: "Minimum of 3 Characters",
							required:  "Username is Required"
						},
						fullName : {
							minlength: "Minimum of 5 Characters",
							required: "Fullname is Required"
						},
						designationId : {
							required: "Designation Id Required"
						},
						password : {
							minlength: "Minimum of 5 Characters",
							required: "Password is Required"
						},

						userStatus : {
							minlength: "Minimum of 3 Characters",
							required: "User Status is Required"
						},
						email : {
							minlength: "Minimum of 5 Characters",
							required: "Email is Required"
						},
						mobile : {
							minlength: "Minimum of 5 Characters",
							required: "Mobile is Required"
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
