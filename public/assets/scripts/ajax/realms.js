
var ajaxCreateRealms = function(data,cb){
	callAjaxRequest("POST","/api/realms/add",data,cb);
};

var ajaxEditRealms = function(data,id,cb){
	callAjaxRequest("POST","/api/realms/edit/"+id,data,cb);
};

var ajaxGetRealmTypeOptions = function(cb){
	callAjaxRequest(null,"/api/realms/type/list",null,cb);
};

var ajaxGetRealmOptions = function(cb){
	callAjaxRequest("POST","/api/realms/list",null,cb);
};
