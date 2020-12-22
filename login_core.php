<?php
require_once("connect.php");
$userInputName = $_REQUEST["uName"];
$userInputPwd = $_REQUEST["upassword"];

$matchQuery= "SELECT * FROM sign_up WHERE email_addg ='$userInputName' AND  user_pwd = '$userInputPwd'  " ;

$run_Match_Query = mysqli_query ($connect ,$matchQuery );
$test_Query = mysqli_num_rows($run_Match_Query);





if ($run_Match_Query == true ) {
	if($test_Query === 1){
	session_start();
	
	$_SESSION["userEmail"]=$userInputName;

	header("location:home.php");

}else{
    header("location:login.php?Wrong_info");
}
  }



?>