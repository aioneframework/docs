$(document).ready(function() {
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