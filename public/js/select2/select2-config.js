// Select2 for all .select2
(function ($){
	$(document).ready(function(){
		$("select.select2").each(function(){
			$(this).select2({
				allowClear:true
			});
		});
	});
})(jQuery);
