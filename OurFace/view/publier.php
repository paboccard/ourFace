<?php
//include_once("../model/messageTable.class.php");

if (isset($_POST["publier"])) {
	$id = $_POST["myText"];
	echo "myText -> ".$id;
    echo messageTable::setAime($id);
    //exit();
}

?>