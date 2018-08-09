$(document).ready(function(){
	$("button").click(function(){
		if($(this).html()=="Show")
		{
		$(this).html("hide");
		$("img").show();}
		else{
			$("img").hide();
			$(this).html("Show");
		}

	});
});