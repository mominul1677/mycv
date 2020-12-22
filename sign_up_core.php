<?php
if (isset($_POST["signuo-submit"])) {
	require_once("connect.php");

$fname = $_POST["fName"];
$lname = $_POST["lName"] ;
$email_addg = $_POST["user_email"] ;
$usr_pwd = $_POST["password"] ;
$usr_pwd_repeat = $_POST["rep-password"] ;
if (empty($fname) ||  empty($lname) || empty($email_addg ) || empty($usr_pwd) || empty($usr_pwd_repeat) ) {
	header("location: signup.php?error=emptyfields&uid".$fname."&lname".$lname . "&mail".$email_addg);
	exit();
   }
     elseif ($usr_pwd !== $usr_pwd_repeat ) {
     	header("location: signup.php?error=yourpassworddoesnotmatch");
     	exit();

     	
	
     }
     else{

     	
     		$insertQuere = "INSERT INTO sign_up ( fname, lname, email_addg, user_pwd  ) VALUES ( '$fname' , '$lname' , '$email_addg' , '$usr_pwd')"; 

              $run_Query = mysqli_query ($connect , $insertQuere);
     			header("location:login.php");
     	exit();
     	}



}
else{
	header("location: signup.php");
     	exit();
}



 