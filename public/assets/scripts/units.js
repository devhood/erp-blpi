
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
                    unitQuantity : {
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
			
			var uoms = [];
			var uomsTable = $('#uomsTable').dataTable();
			var manageUnits = {
				
				add : function(){

					if(!uoms[$('#uomId option:selected').val()]){
						uoms[$('#uomId option:selected').val()] = $("#unitQuantity").val();
						uomsTable.fnAddData([
							$('#uomId option:selected').text() ,
							$("#unitQuantity").val(), 
							"<a href='#' class='units_delete_row"+uoms.length+"'>Delete</a>"]);
					
						$(".units_delete_row"+uoms.length).live('click', function (e) {
							manageUnits.remove($(this));
						});
					}
					else{
						alert("Units already added, please remove first");
					}
					$('#unitModal').modal('toggle');
					
				},
				edit : function(){
					var uom = {
						"uoms[uomId]" : $("#uomId").val(),
						"unitQuantity" : $("#unitQuantity").val(),
					};
					uoms[$("#uomId").val()] = uom;
					alert(JSON.stringify(uoms));
				},
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					uomsTable.fnDeleteRow(nRow);
				}
				
			}
			
		}
	};

}();