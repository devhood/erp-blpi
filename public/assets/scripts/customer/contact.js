
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
                    
                	fullName : {
                        minlength: 2,
                        required: true
                    },
                    
                    contactemail : {
                        minlength: 2,
                        required: true,
                        email: true
                    },
                    
                    contactphone : {
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
							$("#fullName").val(), 
							$("#position").val(), 
							$("#contactphone").val(), 
							$("#contactemail").val(),
							"<a href='#' class='contact_delete_row"+contactctr+"'>Delete</a>"
							+ "<input type='hidden' name='contact["+ contactctr +"][fullName]' value='" + $('#fullName').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][position]' value='" + $('#position').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][phone]' value='" + $('#contactphone').val() + " ' > "
							+ "<input type='hidden' name='contact["+ contactctr +"][email]' value='" + $('#contactemail').val() + " ' > "		]);
					
					$(".contact_delete_row"+	contactctr).live('click', function (e) {
						manageContacts.remove($(this));
					});
					contactctr ++;			
					$('#contactModal').modal('toggle');
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					contactTable.fnDeleteRow(nRow);
				}
				
			} // end manage contacts
		} //end init function
	}; //return Contact.init

}();