var Bundle = function() {

	return {

		init : function() {

			var form = $('#product_bundle');
			var error = $('.alert-danger', form);
			var success = $('.alert-success', form);
			form.validate({
				errorElement : 'span',
				errorClass : 'help-block',
				focusInvalid : false,
				ignore : "",
				rules : {
					childProductId : {
						required : true
					},
					bundleQuantity : {
						minlength : 1,
						required : true,
						number : true
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
					manageBundles.add();
				}
			});

			var bundlesTable = $('#bundlesTable').dataTable({
				"bLengthChange" : false,
				"bFilter" : false
			});
			var bundle = [];
			var bundlectr = 1;

			var manageBundles = {

				add : function() {

					bundlesTable.fnAddData([
							$('#childProductId option:selected').text(),
							$('#bundleQuantity').val(),
							"<a href='#' id='" + $('#childProductId').val()+ "' class='bundle_delete_row"+ $('#childProductId').val()+ "'>Delete</a>"
							+ "<input type='hidden' name='bundle[" + bundlectr + "][childProduct][productId]' value='"+ $('#childProductId').val() + "'>"
							+ "<input type='hidden' name='bundle[" + bundlectr + "][bundleQuantity]' value='"+ $('#bundleQuantity').val() + "'>" ]);
					bundlectr++;
					$(".bundle_delete_row" + $('#childProductId').val()).live(
							'click', function(e) {
								manageBundles.remove($(this));

							});
					$('#bundleModal').modal('toggle');
				//	alert(JSON.stringify(bundle));
				},
				remove : function(elem) {
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