var ajaxCreatePerson = function(data,cb){
	callAjaxRequest("POST","/api/person/add",data,cb);
};

var ajaxEditPerson = function(data,id,cb){
	callAjaxRequest("POST","/api/person/edit/"+id,data,cb);
};

var ajaxGetPersonTypeOptions = function(cb){
	callAjaxRequest(null,"/api/person/type/list",null,cb);
};