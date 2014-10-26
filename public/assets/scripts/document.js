
var Document = function () {

	return {

		init: function () {
			
			var form = $('#product_document');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                	documentTypesId : {
                        required: true
                    },
                    documentLink : {
                        minlength: 1,
                        required: true
                    },
                    documentName : {
                        minlength: 1,
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
                manageDocuments.add();
            }
			});
			
			var documents = [];
			var documentTable = $('#documentTable').dataTable();
			var manageDocuments = {
				
				add : function(){
					documents.push(1);
					documentTable.fnAddData([
							$('#documentTypesId option:selected').text() ,
							$("#documentLink").val(), 
							$("#documentName").val(),
							"<a href='#' class='document_delete_row"+documents.length+"'>Delete</a>"]);

					$(".document_delete_row"+documents.length).live('click', function (e) {
						manageDocuments.remove($(this));
					});
					$('#documentModal').modal('toggle');
					
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					documentTable.fnDeleteRow(nRow);
				}
				
			}
			
		}
	};

}();