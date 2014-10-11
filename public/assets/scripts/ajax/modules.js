var ajaxCreateModules = function(data,cb){
	callAjaxRequest("POST","/api/modules/add",data,cb);
};

var ajaxEditModules = function(data,id,cb){
	callAjaxRequest("POST","/api/modules/edit/"+id,data,cb);
};
