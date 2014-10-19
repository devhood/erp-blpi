var Product = function () {

	return {

		init: function () {

			function getClassificationName(cb){
				ajaxSelect("Classifications",{},cb);
			};
			$('#classificationId').select2({
                query: function (query){
                	getClassificationName(function(err,data){
						var content = [];
						for(var i = 0; i<data.data.length; i++){
							content.push({id:data.data[i].classificationId,text:data.data[i].classificationName});
						}
						return query.callback(content);
					});

                    
                }
            });
		}
	};

}();