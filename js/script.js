$(document).ready(function() {

	var nbMsg = 10;
  	$("#btn_photo").prop('disabled', true);
  	$("#statut").hide();


  	$("#chat-text").animate({height: '80',marginTop: '-32'},300);
	$("#text-chat-perso").animate({height: '20%'},300);


  	$(".btn_like").click(function(){
  	var $this = $(this);
  	$.ajax(
		{
			type: "POST",
			url: "OurFaceAjax.php?action=addLike",
			data:{ 
				'id': $(this).attr('id')
			}
		}
		)
		.done( 
		function(data)
		{
			console.log(data);
			$("#"+$this.attr('id')).html('<span class="glyphicon glyphicon-thumbs-up"></span> J\'aime ' + data);
		}
		);
	});

  $("#btn_login").click(function(){
  	$.ajax({
  		type:"POST",
  		url: "OurFaceAjax.php?action=login",
  		data:{
  			'pseudo': $("input[name='pseudo']").val(),
  			'pass': $("input[name='pass']").val()
  		}
  	})
  	.done(function(data){
  		$(".template").html(data);
  	});
  });

  /** click on Button publier in exprimerMsg.php **/
  $("#btn_publier").click(function(){
  	$.ajax({
  		type:"POST",
  		url: "OurFaceAjax.php?action=myWall",
  		data:{
  			'message' : $("#status").val(),
  			'emetteur' : $("#id_emetteur").text(),
  			'destinataire' : $("#identifiant").text().split(" ")[2]
  		}
  	})
  	.done(function(data){
  		$(".template").html(data);
  	});
  });


	var tmppath;
	$('#join').change( function(event) {
    	tmppath = URL.createObjectURL(event.target.files[0]);
    	$("#img_picture").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    	console.log(tmppath);
    	$("#disp_tmp_path").html("Temporary Path(Copy it and try pasting it in browser address bar) --> <strong>["+tmppath+"]</strong>");
		if (tmppath != "" || tmppath != null){
			$("#btn_publier").prop('disabled', false);
		} 
		console.log($("#join")[0].files[0].name);
		console.log($("#pHide").text());
		$("#pHide").html('<?= $_FILE[[join][name]]; ?>' + 'bonjour');
	});


  $("#btn_mofStatut").click(function(){
  		$("#statut").show();
  		if ($("#btn_mofStatut").val() == "Valider"){
  			console.log("bonjour");
	   		$.ajax({
				type:"POST",
				url: "OurFaceAjax.php?action=changeStatut",
				data:{
					'id' : $("#identifiant").text().split(" ")[2],
  					'statut' : $("#statut").val()
				}
			})
			.done(function(data){
				$("#txt_statut").html("Statut : " + $("#statut").val());
				$("#statut").hide();
				$("#btn_mofStatut").val("Modifier");
			});
  		}
  		$("#btn_mofStatut").val("Valider");

  });

  	$(window).scroll(function() {
  		var scrollTopTmp = $(window).scrollTop();
   			if($(window).scrollTop() + $(window).height() > $(document).height()) {
			$(window).scrollTop(scrollTopTmp);
			nbMsg += 10;
   			if (getUrlVars()['action'] == 'myWall'){
   				/*console.log("myWall");
   				console.log(getUrlVars()['profile']);
   				$.ajax({
				type:"POST",
				url: "OurFaceAjax.php?action=refreshMyWall",
				data:{
					'nb': nbMsg,
					'id': getUrlVars()['profile']
				}
				})
				.done(function(data){
					console.log(data);
					$(".template").html(data);
				});*/	
   			}else{
   				console.log("Wall");
	   			$.ajax({
					type:"POST",
					url: "OurFaceAjax.php?action=refreshwall",
					data:{
						'nb': nbMsg,
					}
				})
				.done(function(data){
					console.log(data);
					$(".template").html(data);
				});
				}
			}
	});





  	$("#moveFriend").click(function()
  	{
  		$(".listeFriend").animate({width: '30'},300);
   	})

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

  $(".btn_like").click(function(){
  	var $this = $(this);
  	$.ajax(
		{
			type: "POST",
			url: "OurFaceAjax.php?action=addLike",
			data:{ 
				'id': $(this).attr('id')
			}
		}
		)
		.done( 
		function(data)
		{
			$("#"+$this.attr('id')).html('<span class="glyphicon glyphicon-thumbs-up"></span> J\'aime ' + data.slice(0, data.indexOf("<")));
		}
		);
	});

  $("#btn_login").click(function(){
  	$.ajax({
  		type:"POST",
  		url: "OurFaceAjax.php?action=login",
  		data:{
  			'pseudo': $("input[name='pseudo']").val(),
  			'pass': $("input[name='pass']").val()
  		}
  	})
  	.done(function(data){
  		console.log(data);
  		$(".template").html(data);
  	});
  });

  /** click on Button publier in exprimerMsg.php **/
  $("#btn_publier").click(function(){
  	$.ajax({
  		type:"POST",
  		url: "OurFaceAjax.php?action=myWall",
  		data:{
  			'message' : $("#status").val(),
  			'emetteur' : $("#id_emetteur").text(),
  			'destinataire' : $("#identifiant").text().split(" ")[2]
  		}
  	})
  	.done(function(data){
  		console.log(data);
  		$(".template").html(data);
  	});
  });


	var tmppath;
	$('#parcourir').change( function(event) {
    	tmppath = URL.createObjectURL(event.target.files[0]);
    	$("#img_picture").fadeIn("fast").attr('src',URL.createObjectURL(event.target.files[0]));
    	console.log(tmppath);
    	$("#disp_tmp_path").html("Temporary Path(Copy it and try pasting it in browser address bar) --> <strong>["+tmppath+"]</strong>");
		if (tmppath != "" || tmppath != null){
			$("#btn_photo").prop('disabled', false);
		}
	});


  $("#btn_photo").click(function(){

  	console.log(document.getElementById('parcourir').value);

  	console.log($("#parcourir").val());
  	console.log(tmppath);
  	$.ajax({
  		type:"POST",
  		url: "OurFaceAjax.php?action=changePhoto",
  		data:{
  			'id' : $("#identifiant").text().split(" ")[2],
  			'image' : tmppath
  		}
  	})
  	.done(function(data){
  		console.log(data);
  		$("#btn_photo").prop('disabled', true);
  	});
  });

  $("#btn_mofStatut").click(function(){
  		$("#statut").show();
  		$("#btn_annuler").show();
  		if ($("#btn_mofStatut").val() == "Valider"){
  			console.log("bonjour");
	   		$.ajax({
				type:"POST",
				url: "OurFaceAjax.php?action=changeStatut",
				data:{
					'id' : $("#identifiant").text().split(" ")[2],
  					'statut' : $("#statut").val()
				}
			})
			.done(function(data){
				$("#txt_statut").html("Statut : " + $("#statut").val());
				$("#statut").hide();
				$("#btn_annuler").hide();
				$("#btn_mofStatut").val("Modifier");
			});
  		}
  		$("#btn_mofStatut").val("Valider");

  });

  /*$("#btn_annuler").click(function(){
		if ($("#btn_mofStatut").val() == "Modifier"){
			$("#statut").hide();
			$("#btn_annuler").hide();
			$("#btn_mofStatut").val("Modifier");
		}
  }*/
  

  	$(window).scroll(function() {
  		var scrollTopTmp = $(window).scrollTop();
   			if($(window).scrollTop() + $(window).height() > $(document).height()) {
			$(window).scrollTop(scrollTopTmp);
			nbMsg += 10;
   			console.log(nbMsg);
   			$.ajax({
				type:"POST",
				url: "OurFaceAjax.php?action=wall",
				data:{
					'nb': nbMsg
				}
			})
			.done(function(data){
				$(".template").html(data);
			});
			}
	});

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}


  
});