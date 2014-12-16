bootbox.redirect_confirm = function(url, message, target){
	if(typeof target == "undefined"){
		target = "_self";
	}

	bootbox.confirm(message, function(result){
		if(result===true){
			window.open(url, target);
		}
	});
};

bootbox.setDefaults({
	"locale":"br"
});