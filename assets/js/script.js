$(document).ready(function() {
	load_options();
	$(document).on('click', '.options', function(e) {
		load_options();
		//init_sliders();
	});
	$(document).on('change', '.options input, .options select', function(e) {
		load_options();
		//init_sliders(); 
	});

	function load_options(){
		var classes = [];
		var data = [];
        var options_data = $(this).find("form").serializeArray();
        console.log("options_data");
        	console.log(options_data);
        jQuery.each( options_data, function( index, field ) {
        	console.log("Index"+index);
        	console.log("field");
        	console.log(field);
        	if(false){

        	} else{
        	}
          		classes.push(field.value);
        });
        classes.join(" ")
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