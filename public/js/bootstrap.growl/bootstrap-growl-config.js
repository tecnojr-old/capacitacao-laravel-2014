jQuery.growl(false, {
	animate:{
		enter: "animated fadeInDown",
		exit:  "animated fadeOutUp"
	},

	mouse_over:"pause",

	offset: {
		y: Number.parseInt($("#menu-top-principal").outerHeight(true))+5
	},

	placement: {
		from:"top",
		align:"center"
	},
});

function growl(title, type, options){
	setTimeout(function(){
		jQuery.growl(title, $.extend( {
			type: type
		}, options||{}));
	}, 1000);
}