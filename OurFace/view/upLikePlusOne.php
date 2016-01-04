<?php
include_once("../model/messageTable.class.php");

if (isset($_GET["id"])) {
	$id = $_GET["id"];
	echo "my id -> ".$id;
    echo messageTable::setAime($id);
    //exit();
}

?>