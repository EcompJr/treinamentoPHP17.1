<?php 

require_once("../database/Connection.class.php");

$login = "g@g.com";
$senha = "123";

$conn = Connection::getInstance();
$query = "SELECT * FROM pcd_db WHERE login =  \"$login\" AND senha = \"$senha\"";
$sql = $conn->query($query);
$row = $sql->fetch(PDO::FETCH_ASSOC);
if($row){
	echo $row;
}

?>