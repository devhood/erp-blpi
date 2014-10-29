var Access = function() {

	return {

		init : function() {

			var form = $('#access');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement : 'span',
				errorClass : 'help-block',
				focusInvalid : false,
				ignore : "",
				rules : {
					permissionId : {
						required : true
					},
				},

				permissionId : { // custom messages for radio buttons and checkboxes
					permission : {
						required : "Fullname is Required"
					},
				},
				invalidHandler : function(event, validator) { //display error alert on form submit
					success.hide();
					error.show();
					App.scrollTo(error, -200);
				},

				highlight : function(element) { // hightlight error inputs
					$(element).closest('.form-group').addClass('has-error'); // set error class to the control group
				},

				unhighlight : function(element) { // revert the change done by hightlight
					$(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
				},

				success : function(label) {
					label.closest('.form-group').removeClass('has-error'); // set success class to the control group
				},

				submitHandler : function(form) {
					success.show();
					error.hide();
					manageAccess.add();
				} 
			});
			
			var accessTable = $('#accessTable').dataTable();
			var access = [];
			
			var manageAccess = {
					
				add : function(){
					if(!access[$('#permissionId').val()]){
						access[$('#permissionId').val()] = $('#permissionId').val();
						accessTable.fnAddData([
							$('#permissionId option:selected').text() ,
								"<a href='#' id='"+$('#permissionId').val()+"' class='access_delete_row"+$('#permissionId').val()+"'>Delete</a>"
								+"<input type='hidden' name='permission[][permission[permissionId]]' value='"+$('#permissionId').val()+"'>"
							]);
							$(".access_delete_row"+$('#permissionId').val()).live('click', function (e) {
								manageAccess.remove($(this));
								
							});
							$('#accessModal').modal('toggle');
					}

					
				},
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					delete access[elem.attr('id')];
					var nRow = elem.parents('tr')[0];
					accessTable.fnDeleteRow(nRow);
				}
			}
		}
	};

}();
