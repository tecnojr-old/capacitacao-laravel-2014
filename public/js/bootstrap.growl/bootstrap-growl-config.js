jQuery.growl(false, {
	animate:{
		enter: "animated fadeInDown",
		exit:  "animated fadeOutUp"
	},

	element: "#page-content",

	delay: 7000,

	mouse_over:"pause",

	offset: {
		y: Number.parseInt($("#menu-top-principal").outerHeight(true))+5
	},

	position: "top-center",
	
	placement: {
		from: "top",
		align: "center"
	}

});

function growl(title, type, options){
	jQuery.growl(title, $.extend( {
		type: type
	}, options||{}));
}