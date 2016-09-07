// JavaScript Document
var alert_message_disp_flag = true;
$(function(){

	$("#menu-btn").click(function() {
		$(".menu").slideToggle(200);
		$("#menu-btn-icon").toggleClass("close");
		$("#menu-btn").toggleClass("close");
		return false;
	});

	//$("body").click(function(){
   	//	var alert_message = [];
    //    alert_message.push( "※フリーページのタイトルを入力してください" );
    //    alertMessage(alert_message);
	//});
	
	$("#menu").click(function(e){
		e.stopPropagation();
	});
	
	var mobile_menu_open = false;
	$("header .menu_button img").click(function(){
		if( mobile_menu_open ){
			$("header .menu").animate({
				'top' : '-120px'
			} , "fast" , "swing" , 
			function(){
				mobile_menu_open = false;
			});
		}else{
			$("header .menu").animate({
				'top' : '60px'
			} , "fast" , "swing" , 
			function(){
				mobile_menu_open = true;
			});
		}
	});
	
	$(window).resize(function(){
//		var win = $(window).width();
//		if( win > 640 ){
//			$("#mobile_menu").hide();
//		}
	})
});



function alert_message_disp( messages ){
	if( alert_message_disp_flag ){
	    alert_message_disp_flag = false;
	    var list_html = "";
	    for( var i = 0; i < messages.length; i++ ){
	        list_html += '<li>'+messages[i]+'</li>';
	    }
	    list_html = '<ul class="message">'+list_html+'</ul>';
	    $("#message_area").html(list_html);
	    $("#message_area").fadeIn(500).delay(1500).fadeOut(800 , function(){
	       alert_message_disp_flag = true;
	    });

	}
}

