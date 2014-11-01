
var Contact = function () {

	return {

		init: function () {
	
			var form = $('#customer_contact');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                	position : {
                        required: true,
                        minlength: 2
                    },
                    
                	fullname : {
                        minlength: 2,
                        required: true
                    },
                    
                    email : {
                        minlength: 2,
                        required: true,
                        email: true
                    },
                    
                    phone : {
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
                manageContacts.add();
            }
			});
			
			var contactTable = $('#contactTable').dataTable({
				"bLengthChange" : false,
				"bFilter" : false
			});
			
			var contact = [];
			var contactctr = 1;
			
			var manageContacts = {
				
				add : function(){						
					contactTable.fnAddData([
							$("#fullname").val(), 
							$("#position").val(), 
							$("#phone").val(), 
							$("#email").val(),
							"<a href='#' id='"+$('#Id').val()+"' class='contact_delete_row"+$('#contactId').val()+"'>Delete</a>"
							+ "<input type='hidden' name='contact["+ contactctr+"][fullName]' value='" + $('#fullName').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][position]' value='" + $('#position').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][phone]' value='" + $('#phone').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][email]' value='" + $('#email').val() + " ' > "		]);
					contactsctr ++;					
					$(".contact_delete_row"+$.val()).live('click', function (e) {
						manageContacts.remove($(this));
					});
					$('#contactModal').modal('toggle');
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					contactTable.fnDeleteRow(nRow);
				}
				
			}
		}
	};

}();