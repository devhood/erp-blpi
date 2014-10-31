
var Items = function () {

	return {

		init: function () {

			var form = $('#items_add');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement: 'span',
				errorClass: 'help-block',
				focusInvalid: false,
				ignore: "",
				rules: {

					shipmentItemId : {
						minlength: 3,
						required: true
					},
					shipmentId : {
						minlength: 5,
						required: true
					},
					productId : {
						required: true
					},

					quantity : {
						minlength: 3,
						required: true
					},
					cost : {
						minlength: 10,
						required: true
					},
					currency : {
						minlength: 5,
						required: true
					},
					expiryDate : {
						minlength: 5,
						required: true
					},
					condition : {
						minlength: 5,
						required: true
					},
					

				},

					messages: { // custom messages for radio buttons and checkboxes

						shipmentItemId : {
							minlength: "Minimum of 3 Characters",
							required:  "Shipment Item ID is Required"
						},
						shipmentId : {
							minlength: "Minimum of 5 Characters",
							required: "Shipment ID is Required"
						},
						productId : {
							required: "Product ID is Required"
						},
						quantity : {
							minlength: "Minimum of 5 Characters",
							required: "Quantity is Required"
						},

						cost : {
							minlength: "Minimum of 3 Characters",
							required: "Cost is Required"
						},
						currency : {
							minlength: "Minimum of 5 Characters",
							required: "Currency is Required"
						},
						expiryDate : {
							minlength: "Minimum of 5 Characters",
							required: "Expiry Date is Required"
						},
						condition : {
							minlength: "Minimum of 5 Characters",
							required: "Condition is Required"
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
						manageItems.add();
						
					}
				});
			var items = [];
			var itemsTable = $('#itemsTable').dataTable();
			var manageItems = {
				
				add : function(){
					items.push(1);
					itemsTable.fnAddData([
							$('#shipmentItemId option:selected').text() ,
							$('#shipmentId option:selected').text() ,
							$("#itemQuantity").val(), 
							$("#cost").val(),
							$("#expiryDate").val(), 
							$("#condition").val(), 
							$('#currencyId option:selected').text() ,
							
							"<a href='#' class='items_delete_row"+items.length+"'>Delete</a>"]);
					
					$(".items_delete_row"+items.length).live('click', function (e) {
						manageItems.remove($(this));
					});
					$('#itemsModal').modal('toggle');
					
				},
			
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}

					var nRow = elem.parents('tr')[0];
					itemsTable.fnDeleteRow(nRow);
				}
				
			}
			
		}
	};

}();

