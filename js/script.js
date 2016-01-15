$(document).ready(function() {

  	$("#moveFriend").click(function()
  	{
  		$(".listeFriend").animate({width: '30'},300);
   	})
	$("#exit-chat").click(function()
	{
		
		
		if($("#chat-text").height() <= '105')
		{
			$("#chat-text").animate({height: '330',marginTop: '-282'},300);
			$("#text-chat-perso").animate({height: '82%'},300);


		}else
		{
			$("#chat-text").animate({height: '80',marginTop: '-32'},300);
			$("#text-chat-perso").animate({height: '20%'},300);
		}
		
	});
	$( "#picture-wall" ).mouseover(function() {
		 $("#change-picture").stop();
	    	$("#change-picture").show();
	  }).mouseout(function() {
	  	$("#change-picture").stop();
   		 $("#change-picture").hide();
  		});
	
	$( "#picture-wall" ).mouseover(function() {
		 $("#change-picture").stop();
	    	$("#change-picture").show();
	  }).mouseout(function() {
	  	$("#change-picture").stop();
   		 $("#change-picture").hide();
  });
	 $(".btn-chat").click(function()
	{
		console.log($("#q").val());
		//$.POST('OurFaceAjax.php?action=addMessage',{'message':$("#q").val()});
		$.ajax(
			{
				type: "POST",
				url: "OurFaceAjax.php?action=addMessage",
				data:{
					'message': $('#q').val()
				}
			}
			)
			.done( 
			function(request)
			{
				console.log(request);
				document.getElementById('q').value = '';

				//$("#text-chat-perso").html(request);
			}
			);
		//chatTable::setChats($("#q").val());*/
		
	});

var myVar = setInterval(function(){ myTimer() }, 2000);

function myTimer() {
	
   $.ajax(
			{
				type: "POST",
				url: "OurFaceAjax.php?action=rafraichirChat"
			}
			)
			.done( 
			function(request)
			{
				
				$("#text-chat-perso").html(request);
				element = document.getElementById('text-chat-perso');
				element.scrollTop = element.scrollHeight;
				//$("#text-chat-perso").scrollTop() = $("#text-chat-perso").height();

			}
			);
}


  
});