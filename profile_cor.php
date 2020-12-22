	<?php
require_once "blogin" ;
require_once("connect.php");
$user_email=$_SESSION["userEmail"];
echo $user_email;


$matchQuery= "SELECT * FROM user WHERE user_email = $user_email  " ;


 

$query = mysqli_query ($connect ,$matchQuery );


	echo "	db_hName";



?>




