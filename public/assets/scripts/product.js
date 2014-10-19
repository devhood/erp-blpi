
var Product = function () {

	return {

		init: function () {
			$('#classificationId').select2({
                query: function (query){
                	ajaxSelect("Classifications",{},function(err,data){
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