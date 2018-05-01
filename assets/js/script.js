$(document).ready(function() {
	
    $(".options").click(function(e) {
        var options = "";
        var options_data = $(this).find("form").serializeArray();
        jQuery.each( options_data, function( index, field ) {
          options += " " + field.value;
        });
        $( "#tab_preview > *").attr('class',options);
        $( "#tab_code > textarea").val($( "#tab_preview > *")[0].outerHTML);
    });
    $(".options").click();
	$('#aione_header').load('template/aione_header.html', function() {
		var options = {
			valueNames: ['aione-search-item'],
			searchClass: 'aione-search-input',
			listClass: 'aione-search-list'
		};
		var search = new List('aione_nav', options);
	});
	//$('#aione_footer').load('template/footer.html');
	//$('#aione_copyright').load('template/copyright.html');
});