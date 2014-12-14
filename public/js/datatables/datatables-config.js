// DataTables for all .table
(function ($){
	$(document).ready(function(){
		$("table.table").each(function(){
			$(this).DataTable({
				"columnDefs" : [
					{"targets": "options", "orderable":false, "searchable":false}
				],
				"language": {
            "url": "js/datatables/Portuguese-Brasil.json"
         }
			});
		});
	});
})(jQuery);
