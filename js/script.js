$(document).ready(function() {
  
   	/*$( ".friends" ).click(function()
	{
		var retour = $(this).attr('id');
		alert(retour);
	});*/
	$("#exit-chat").click(function()
	{
		if($("#chat-text").height() <= '35')
		{
			$("#chat-text").animate({height: '300',marginTop: '-300'},300);

		}else
		{
			$("#chat-text").animate({height: '25',marginTop: '-25'},300);
		}
		
	})
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

  
});