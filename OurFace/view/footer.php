<footer class="footer">
	<div class="container cancel-padding">
	<div id="chat" class="col-md-offset-8 col-md-3">

		<div id="chat-text">
			
			<div id="text-chat-perso">
				<?php
				
					$msg = chatTable::getChats();
					
					foreach ($msg as $key => $value) {
						echo $value->emetteur->nom.' : '.$value->post->texte.'<br>';
					}
				?>

			</div>
		</div>

		<form class="navbar-form" role="search" action="" method="POST" >
			<img src="images/croix.png" alt="oui" id="exit-chat" class="img-rounded ">
            <div class="input-group form-group-sm">

                <input type="text" class="form-control input-chat" placeholder="Saisir le texte" name="q">
                <div class="input-group-btn">
                    <button name="valmessage" class="btn btn-default btn-sm" type="submit"><i class="glyphicon glyphicon-send"></i></button>
                </div>
            </div>
        </form>
        <?php
        if(isset($_POST['valmessage']))
        {
        	chatTable::setChats($_POST['q']);
        }
        ?>
       	</div>
	</div>
</footer>