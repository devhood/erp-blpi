
var Price = function () {

	return {

		init: function () {
			
			var form = $('#product_price');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                    priceTypeId : {
                        required: true
                    },
                    priceAmount : {
                        minlength: 1,
                        required: true,
                        number: true
                    },
                    currencyId : {
                        minlength: 2,
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
                managePrices.add();
            }
			});
			
			var prices = [];
			var priceTable = $('#priceTable').dataTable();
			var managePrices = {
				
				add : function(){
					prices.push(1);
					priceTable.fnAddData([
							$('#priceTypeId option:selected').text() ,
							$("#priceQuantity").val(), 
							$('#currencyId option:selected').text() ,
							"<a href='#' class='price_delete_row"+prices.length+"'>Delete</a>"]);
					
					$(".price_delete_row"+prices.length).live('click', function (e) {
						managePrices.remove($(this));
					});
					$('#priceModal').modal('toggle');
					
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					var nRow = elem.parents('tr')[0];
					priceTable.fnDeleteRow(nRow);
				}
				
			}
			
		}
	};

}();