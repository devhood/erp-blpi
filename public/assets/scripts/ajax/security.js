
var ajaxLogin = function(data,cb){
	callAjaxRequest("POST","/users/api/login",data,cb);
};
