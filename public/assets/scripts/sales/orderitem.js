
var OrderItem = function () {

	return {

		init: function () {

			var form = $('#order_add');
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
					
					quantity : {
						required: true,
						number: true
					},
				},

					messages: { // custom messages for radio buttons and checkboxes
						transactionTypeId: {
							required: "Transaction Type is Required"
						},
						customerId: {
							required: "Customer is Required"
						},
						inventoryLocationId : {
							required: "Inventory Location is Required"
						},
						shippingAddressId : {
							required: "Shipping Address is Required"
						},
						billingAddressId : {
							required: "Billing Address is Required"
						},
						orderSourceId : {
							minlength: 1,
							required: "Order Source is Required"
						},
						shippingModeId : {
							minlength: 1,
							required: "Shipping Mode is Required"
						},
						userId : {
							required: "User is Required"
						},
						paymentTermId : {
							required: "Payment Term is Required"
						},
						deliveryDate : {
							minlength: 2,
							required: "Delivery Date is Required"
						},
						orderedBy : {
							minlength: 2,
							required: "Ordered By is Required"
						},
						printedCode : {
							minlength: 2,
							required: "Printed Code is Required"
						},
						priceTypeId : {
							required: "Please select  at least 1 types of Service",
						},
						productDescription : {
							required: "Product Description is Required"
						},
						percentVat : {
							required: "Percent Vat is Required"
						},
						notes : {
							required: "Notes is Required"
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
						manageOrders.add();
					}
				});
			var orderTable = $('#orderTable').dataTable({"bLengthChange": false, "bFilter" : false});
			var order = [];
			var orderctr = 1;
			
			var manageOrders = {
					
				add : function(){
					if (!order[$('#productId').val()]) {
						order[$('#productId').val()] = $('#productId').val();
					
						orderTable.fnAddData([
							$('#productId option:selected').text() ,
							$('#quantity').val(),
								"<a href='#' id='"+$('#productId').val()+"' class='order_delete_row"+$('#productId').val()+"'>Delete</a>"
								+"<input type='hidden' name='order["+orderctr+"][product][productId]' value='"+$('#productId').val()+"'>"
								+"<input type='hidden' name='order["+orderctr+"][quantity]' value='"+$('#quantity').val()+"'>"
							]);
						orderctr++;
							$(".order_delete_row"+$('#productId').val()).live('click', function (e) {
								manageOrders.remove($(this));
								
							});
							$('#itemsModal').modal('toggle');
					}

				},
				remove : function(elem){
					if (confirm("Are you sure to delete this row ?") == false) {
						 return;
					}
					delete order[elem.attr('id')];
					var nRow = elem.parents('tr')[0];
					orderTable.fnDeleteRow(nRow);
				}
			}
		}
	};

}();
