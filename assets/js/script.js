$(document).ready(function() {
	load_options();
	$(document).on('click', '.options', function(e) {
		load_options();
		reset_sliders();
	});
	$(document).on('change', '.options input, .options select', function(e) {
		load_options();
		reset_sliders();
	});

	function load_options(){
		var classes = [];
        var options_data = $('.options').find("form").serializeArray();
        jQuery.each( options_data, function( index, field ) {
        	var field_name = field.name;
        	if(field_name.indexOf("data-") >= 0){
        		$( "#tab_preview > *").attr(field.name,field.value);
        	} else{
          		classes.push(field.value);
        	}
        });
        classes = classes.join(" ");
        $( "#tab_preview > *").attr('class',classes);
        $( "#tab_code > textarea").val($( "#tab_preview > *")[0].outerHTML);
	}
	$('#aione_header').load('template/aione_header.html', function() {
		var options = {
			valueNames: ['aione-search-item'],
			searchClass: 'aione-search-input',
			listClass: 'aione-search-list'
		};
		var search = new List('aione_nav', options);
	});
});