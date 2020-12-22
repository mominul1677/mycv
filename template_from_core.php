	<?php
	require_once "blogin" ;

$host="localhost";
$db_User="root";
$db_pwd="";
$db_name="my_cv";
$connect=mysqli_connect($host,$db_User,$db_pwd,$db_name);

$userhName = $_POST["fname"];
$userproName = $_POST["proName"];
$useremail = $_POST["email"];
$userfackboock = $_POST["fackboock"];
$userphoneNumber = $_POST["phoneNumber"];
 $userpName = $_POST["pName"];
 $userpermanentAddress = $_POST["permanentAddress"];
 $userpresentAddress = $_POST["presentAddress"];
 $userworkExperienc = $_POST["workExperienc"];
 $userskill = $_POST["skill"];
 $userschoolName = $_POST["schoolName"];
 $userschoolAddress = $_POST["schoolAddress"];
 $userspYear = $_POST["spYear"];
 $usercName = $_POST["cName"];
 $usercAddress = $_POST["cAddress"];
 $usercpYear = $_POST["cpYear"];
 $useruName = $_POST["uName"];
 $useruDname = $_POST["udName"];
 $userupYear = $_POST["upYear"];
 $useruAddress = $_POST["uAddress"];
$nameForDB=uniqid();

    //Image upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    //Image upload end






     	$insertQuere = "INSERT INTO user ( db_hName ,db_proName ,db_email ,db_fackboock , db_phoneNumber, db_pName, db_permanentAddress , db_presentAddress , db_workExperienc , db_skill , db_schoolName , db_schoolAddress , db_spYear , db_cName , db_cpYear  , db_cAddress , db_uName, db_udName , db_upYear , db_uAddress,user_email,image_name )




     	 VALUES ( '$userhName' ,'$userproName'  , '$useremail' , '$userfackboock' , '$userphoneNumber' , '$userpName ', '$userpermanentAddress' , '$userpresentAddress', '$userworkExperienc' , '$userskill' , '$userschoolName' , '$userschoolAddress' ,'$userspYear' , '$usercName','$usercAddress' , '$usercpYear' , '$useruName' , '$useruDname' , '$userupYear' , ' $useruAddress','".$_SESSION["userEmail"]."','".$target_file."')";

              $run_Query = mysqli_query ($connect , $insertQuere);
				if($run_Query==true){
					header("location:profile.php?success=Data ins");

				}


else{
	  header("location:template2from.php?Data not ins");

	}





?>

