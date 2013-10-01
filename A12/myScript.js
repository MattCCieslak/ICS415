function loadFrames() {
	var myUrl = $("#urlInput").val();
	var myTag = $("#tagInput").val();

	$(".small").attr("src", myUrl);
	$(".middle").attr("src", myUrl);

	$(".small").load(myUrl, function(data) {
		var elements = $(data).find(myTag);
		$("$tagInput").text(elements.length);
	});

	return false;
}

