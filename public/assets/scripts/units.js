
var Units = function () {

	return {

		init: function () {
			
			var form = $('#product_unit');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                    quantity : {
                        minlength: 1,
                        required: true,
                        number: true
                    },
                    uomId : {
                        required: true
                    }
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
	                manageUnits.add();
	            }
			});
			
			var uomsTable = $('#uomsTable').dataTable();
			var uom = [];
			var uomctr = 1;
			
			var manageUnits = {
					
				add : function(){
					if(!uom[$('#uomId').val()]){
						uom[$('#uomId').val()] = $('#uomId').val();
						
						uomsTable.fnAddData([
							$('#uomId option:selected').text() ,
							$('#quantity').val(),
								"<a href='#' id='"+$('#uomId').val()+"' class='uom_delete_row"+$('#uomId').val()+"'>Delete</a>"
								+"<input type='hidden' name='uom["+uomctr+"][uom][uomId]' value='"+$('#uomId').val()+"'>"
								+"<input type='hidden' name='uom["+uomctr+"][quantity]' value='"+$('#quantity').val()+"'>"
							]);
						uomctr++;
							$(".uom_delete_row"+$('#uomId').val()).live('click', function (e) {
								manageUnits.remove($(this));
								
							});
							$('#unitModal').modal('toggle');
					}

				},
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					delete uom[elem.attr('id')];
					var nRow = elem.parents('tr')[0];
					uomsTable.fnDeleteRow(nRow);
				}
			}
			
		}
	};

}();