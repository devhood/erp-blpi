/**
 * Generic Endpoint to perform same server api calls
 **/
var callAjaxRequest = function(method,endpoint,data,cb){
	var request = {};
	if(method){
		request.type = method;
	}
	if(endpoint){
		request.url = endpoint;
	}
	if(data){
		request.data = data
	}
	$.ajax(request)
	.done(function( msg ) {
		cb(null,msg)
	})
	.fail(function( jqXHR, textStatus ) {
		cb(textStatus);
	});
};
/**
 * Generic Endpoint to perform search record
 **/
var ajaxSelect = function(table,query,cb){
	callAjaxRequest("POST","/api/list/"+table,query,cb);
};
/**
 * Generic Endpoint to perform add record
 **/
var ajaxCreate = function(table,data,cb){
	callAjaxRequest("POST","/api/add"+table,data,cb);
};
/**
 * Generic Endpoint to perform edit record
 **/
var ajaxUpdate = function(table,id,data,cb){
	callAjaxRequest("PUT","/api/edit/"+table+"/"+id,data,cb);
};
/**
 * Generic Endpoint to perform remove record
 **/
var ajaxRemove = function(table,id,cb){
	callAjaxRequest("DEL","/api/del/"+table+"/"+id,null,cb);
};

/**
 * Generic Endpoint to perform same server api calls
 **/
var OptionsToHTML = function(value,text,options,content){
	var option = "";
	for(var i =0; i< options.length; i++){
		var selected = "";
		if(content == options[i][text]){
			selected = "selected";
		}
		option+="<option value="+options[i][value]+" "+selected+">"+options[i][text]+"</option>";
	}
	return option;
};