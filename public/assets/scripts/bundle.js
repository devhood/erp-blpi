
var Bundle = function () {

	return {

		init: function () {
			
			var form = $('#product_bundle');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                    productId : {
                        required: true
                    },
                    bundleQuantity : {
                        minlength: 1,
                        required: true,
                        number: true
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
                manageBundles.add();
            }
			});
			
			var bundles = [];
			var bundlesTable = $('#bundlesTable').dataTable();
			var manageBundles = {
				
				add : function(){
					bundles.push(1);
					bundlesTable.fnAddData([
							$('#productId option:selected').text() ,
							$("#bundleQuantity").val(), 
							"<a href='#' class='bundles_delete_row"+bundles.length+"'>Delete</a>"]);
					
					$(".bundles_delete_row"+bundles.length).live('click', function (e) {
						manageBundles.remove($(this));
					});
					$('#bundleModal').modal('toggle');
					
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					bundlesTable.fnDeleteRow(nRow);
				}
				
			}
			
		}
	};

}();