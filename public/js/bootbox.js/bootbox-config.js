bootbox.rconfirm = function(message){
	var cboxr = false;

	bootbox.confirm(message, function(result){
		cboxr = result;
	});

	return cboxr;
};

bootbox.setDefaults({
	"locale":"br"
});