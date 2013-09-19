$("document").ready(function() {
	$("dd").toggle();
	
	$("dt").click(function() {
		$(this).next().toggle();
	});
});