<div class="row area">
	<form role="form" action"" method="POST">
		<div class="form-group">
			<div class="box">
			    <textarea id="status" class"form-control" name="myText" rows="5">Exprimez-vous...</textarea>
			    <hr/>
				<div class="btn-group pull-left" role="group">
					<div class="btn-group">
						<button class="btn btn-msg msg-color-insert" type="submit"><span class="glyphicon glyphicon-file"></span> Joindre</button>
					</div>
				</div>
				<div class="btn-group pull-right" role="group">
                	<div class="btn-group">
						<input type="submit" name="publier" value="Publier">
            			<!--<button class="btn btn-msg msg-color-com" type="submit">Publier</button>-->
             		</div>
		    	</div>
			</div>
		</div>
	</form>	
	<?php
	if (isset($_POST['publier'])){
		messageTable::publierMessage($_POST['myText'], $_SESSION['pseudo'], $identifiant);
	}
	?>
</div>