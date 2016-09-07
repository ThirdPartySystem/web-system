$(function(){
	$("#search-form").submit(function(){
		var search_word = $("input[name='q']").val();
		if( search_word.trim() == "" ){
			return false;
		}
	});
	$("input[name='q']").focus();
	$("input[name='q']").focus(function(){
		$("#search_box .wrapper .search-area").css("border" , "2px solid #bf0407");
	}).blur(function(){
		$("#search_box .wrapper .search-area").css("border" , "2px solid #111111");
	});

});