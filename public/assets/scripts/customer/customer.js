
var Customer = function () {

	return {

		init: function () {
			
			var form = $('#customer_add');
            var error = $('.alert-danger', form);
            var success = $('.alert-success', form);
			form.validate({
                errorElement: 'span', 
                errorClass: 'help-block', 
                focusInvalid: false, 
                ignore: "",
                rules: {
                	categoryId : {
                        required: true
                    },
                    
                    customerTypeId : {
                        required: true
                    },
                    
                	companyName : {
                        minlength: 2,
                        required: true
                    },
                    
                    tradeName : {
                        minlength: 2,
                        required: true
                    },
                    
                    tinNumber : {
                        minlength: 2,
                        required: true
                    },
                    
                    phone : {
                        minlength: 2,
                        required: true
                    },
                    
                    email : {
                        minlength: 2,
                        required: true,
                        email: true
                    },
                    
                    website : {
                        minlength: 2,
                        required: true
                    },
                    
                    secNumber : {
                        minlength: 2,
                        required: true
                    },
                    
                    consignee: {
                        required: true
                    },
                    
                    franchise: {
                        required: true
                    },
                    
                    creditLimit: {
                        minlength: 1,
                        required: true,
                        number: true
                    }, 
                    
                    unpaidTransactionLimit: {
                        required: true
                    },
                    
                    paymentTermId: {
                       required: true
                    },
                    
                    percentCommission: {
                        minlength: 1,
                       required: true,
                       number: true
                    },
                    
                    shippingModeId: {
                       required: true
                    },
                    
                    userId: {
                        required: true
                    },
                     
                    priceTypeId: {
                         required: true
                    },
                      
                    customerStatus: {
                        required: true
                     },
                     
                 	addressType : {
                        required: true
                    },
                    
                    streetLandmark : {
                        required: true
                    },
                    
                    cityId : {
                        required: true
                    },
                    
                    provinceId : {
                        required: true
                    },
                    
                    countryId : {
                        required: true
                    },
                    
                    zipcode : {
                        minlength: 2,
                        required: true,
                        number: true
                    },
                },
                messages: {
                	categoryId : {
                        required: "Category is Required"
                    },
                    
                    customerTypeId : {
                        required: "Customer Type is Required"
                    },
                    
             
                    
                	companyName : {
                        minlength: 2,
                        required: "Company Name is Required"
                    },
                    
                    tradeName : {
                        minlength: 2,
                        required: "Trade is Required"
                    },
                    
                    tinNumber : {
                        minlength: 2,
                        required: "TIN is Required"
                    },
                    
                    phone : {
                        minlength: 2,
                        required: "Phone is Required"
                    },
                    
                    email : {
                        minlength: 2,
                        required: "Email is Required",
                        email: "Please Enter a valid Email"
                    },
                    
                    website : {
                        minlength: "Please enter a valid website.",
                    },
                    
                    secNumber : {
                        minlength: "Please enter a valid SEC Number.",
                        required: "SEC is Required"
                    },
                    
                    consignee: {
                        required: "Product is Required"
                    },
                    
                    franchise: {
                        required: "Product is Required"
                    },
                    
                    creditLimit: {
                        minlength: "Please enter a valid Credit Limit.",
                        required: "Product is Required",
                        number: "Please enter a valid number."
                    }, 
                    
                
                    
                    paymentTermId: {
                       required: "Product is Required"
                    },
                    
                    percentCommission: {
                        minlength: "Please enter a valid Commission.",
                       required: "Product is Required",
                       number: "Please enter a valid number."
                    },
                    
                    shippingModeId: {
                       required: "Product is Required"
                    },
                    
                    userId: {
                        required: "Product is Required"
                    },
                     
                    priceTypeId: {
                         required: "Product is Required"
                    },
                      
                    customerStatus: {
                        required: "Product is Required"
                     },
                     
                 	addressType : {
                        required: "Product is Required"
                    },
                    
                    streetLandmark : {
                        required: "Product is Required"
                    },
                    
                    cityId : {
                        required: "Product is Required"
                    },
                    
                    provinceId : {
                        required: "Product is Required"
                    },
                    
                    countryId : {
                        required: "Product is Required"
                    },
                    
                    zipcode : {
                        minlength: "Please enter a valid zipcode.",
                        required: "Zipcode is Required",
                        number: "Please enter a valid number."
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
            	form.submit();
               
            }
			});
			
			
			
		}
	};

}();