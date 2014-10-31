
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
                    price : {
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
			
			var priceTable = $('#priceTable').dataTable();
			var price = [];
			var pricectr = 1;
			
			var managePrices = {
					
				add : function(){
					if(!price[$('#priceTypeId').val()]){
						price[$('#priceTypeId').val()] = $('#priceTypeId').val();
					priceTable.fnAddData([
							$('#priceTypeId option:selected').text() ,
							$('#price').val(),
							$('#currencyId option:selected').text() ,
								"<a href='#' id='"+$('#priceTypeId').val()+"' class='price_delete_row"+$('#priceTypeId').val()+"'>Delete</a>"
								+"<input type='hidden' name='price["+pricectr+"][priceType][priceTypeId]' value='"+$('#priceTypeId').val()+"'>"
								+"<input type='hidden' name='price["+pricectr+"][price]' value='"+$('#price').val()+"'>"
								+"<input type='hidden' name='price["+pricectr+"][currency][currencyId]' value='"+$('#currencyId').val()+"'>"
							]);
					pricectr++;
							$(".price_delete_row"+$('#priceTypeId').val()).live('click', function (e) {
								managePrices.remove($(this));
								
							});
							$('#priceModal').modal('toggle');
					}
			

				},
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					delete price[elem.attr('id')];
					var nRow = elem.parents('tr')[0];
					priceTable.fnDeleteRow(nRow);
				}
			}
			
		}
	};

}();