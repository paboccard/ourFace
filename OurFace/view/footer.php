<div class="col-lg-12">
		<div class="footer-search cancel-padding">
			<div id="chat" class=" col-md-3">

				<div id="chat-text">
					<div id="titre-chat">Chat CERI <img src="images/croix.png" alt="oui" id="exit-chat" class="img-rounded "></div>
			
					<div id="text-chat-perso">
						
					</div>
					<div class="input-group form-group-sm send-message">
		            <input type="text" class="form-control" placeholder="Search" id="q">
		            <div class="input-group-btn">
		                <button class="btn btn-default btn-sm btn-chat" type="submit"><i class="glyphicon glyphicon-send"></i></button>
		            </div>
		        </div>
				</div>

			
            
   
        
       	</div>
       </div>

       	<?php
		if (isset($_POST['like'])){
			messageTable::setAime($_POST['idPost']);
		}
		?>
</div>
