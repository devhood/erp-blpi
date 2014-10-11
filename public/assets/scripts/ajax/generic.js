
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
            }