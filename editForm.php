<?php
require_once "blogin" ;
require_once("connect.php");

$query = "SELECT * FROM user WHERE  user_email='".$_SESSION["userEmail"]."'";
$result = mysqli_query ($connect , $query);
$result = mysqli_fetch_assoc($result);
//    echo '<pre>';print_r($result);exit;
?>
<?php
require_once "header.php" ;


?>
<div class="tm2From">
    <center>
        <h1> Please fill up your information </h1>


    </center>
    <form action="updateProfile.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        <h1>Header</h1>
        <input type="text" placeholder="Name" name="hname" value="<?= $result['db_hName'] ?>">
        <input type="text" placeholder="Professsion" name="proName" value="<?= $result['db_proName'] ?>">
        <input type="email" placeholder="Email" name="email" value="<?= $result['db_email'] ?>">
        <input type="text" placeholder="Faceboock" name="fackboock" value="<?= $result['db_fackboock'] ?>">
        <input type="text" placeholder="Phone Number" name="phoneNumber" value="<?= $result['db_phoneNumber'] ?>">
        <h1>Parsonal Information</h1>
        <input type="text" placeholder="Name" name="pName" value="<?=$result['db_pName']  ?>">
        <input type="text" placeholder="Permanent Address" name="permanentAddress" value="<?=$result['db_permanentAddress']  ?>">
        <input type="text" placeholder="Present Address" name="presentAddress" value="<?= $result['db_presentAddress'] ?>">
        <h1>Work Experienc</h1>
        <input type="text" placeholder="Work Experienc" name="workExperienc" value="<?=$result['db_workExperienc']  ?>">
        <h1>Skill</h1>
        <input type="text" placeholder="Skill" name="skill" value="<?=$result['db_skill']  ?>">
        <h1>Education</h1><br>

        <h3>School</h3>
        <input type="text" placeholder="School Name" name="schoolName" value="<?=$result['db_schoolName']  ?>">
        <input type="text" placeholder="School Address" name="schoolAddress" value="<?=$result['db_schoolAddress']  ?>">
        <input type="text" placeholder="Passing year" name="spYear" value="<?=$result['db_spYear']  ?>">
        <h3>College</h3>
        <input type="text" placeholder="College Name" name="cName" value="<?= $result['db_cName'] ?>">
        <input type="text" placeholder="Pssing Year" name="cpYear" value="<?= $result['db_cpYear'] ?>">
        <input type="text" placeholder="College Address" name="cAddress" value="<?= $result['db_cAddress'] ?>">

        <h3>University</h3>
        <input type="text" placeholder="University Name" name="uName" value="<?= $result['db_uName'] ?>">
        <input type="text" placeholder="Department" name="udName" value="<?=$result['db_udName']  ?>">
        <input type="text" placeholder="Pssing Year" name="upYear" value="<?=$result['db_upYear']  ?>">
        <input type="text" placeholder="University Address" name="uAddress" value="<?=$result['db_uAddress']  ?>">
        <input type="submit" name="submit" class="user_form" value="Submit">



    </form>
