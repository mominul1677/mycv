<?php
require_once "blogin" ;
require_once("connect.php");

$query = "SELECT * FROM user WHERE  user_email='".$_SESSION["userEmail"]."'";
$result = mysqli_query ($connect , $query);
$result = mysqli_fetch_assoc($result);
//    echo '<pre>';print_r($result);exit;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYCV</title>
    <link rel="stylesheet" href="template1.css">
</head>
<body>
    <div class="Container">
        <header>
            <img class="profile-photo" src="5.JPG">
           <div class="header-bio">
               <h2> Md. Shakawat Al Sakib </h2>
               <h3> Web Designer </h3>

           </div>
           <div class="header-contact">
               <p> <a href="mailto:mi.saikat98@gmail.com"> Email:rmsakib6251@gmail.com </a> </p>
               <p> <a href="https://web.facebook.com/md.mominulislam.pramanik.16"> Facebook:Shakawat Al Sakib </a> </p>
               <p> <a href="tel:+8801913692074"> Phone:01768241931 </a> </p>


           </div>


        </header>
        <div class="dip-clear"></div>
        <hr class="hr1" >
        <main>
          <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Personal Information </h2>
                </div>
               <div class="right-d" >
                <p> Name: Md. Shakawat Al Sakib
                </p>
                <p>Permanent Address: 2nd Muradpur,Comilla</p>
                 <p> Present Address: Dattapara,Dhaka,Bangladesh</p>
                 <p> </p>

                </div>

            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >
    <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Work Experience </h2>
                </div>
               <div class="right-d" >
                <h3>General Secretary</h3>
                <p>Daffodil International University Film Society - DIUFS-PC.</p>
                <h3>Student Prefect</h3>
                <p> CSE Department Daffodil International University </p>

                </div>

            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >




          <section personal-section>
            <div class="content1">

               <div class="feft-d" >
                <h1> Skill </h1>
                </div>
               <div class="right-d" >
                <h3> Programming languages </h3>
                <p> C,java,HTML,CSS,Javascript and PHP.
                </p>
                <h3> Teaching </h3>
                <p> Student Prefect</p>
                <h3> Sports </h3>
                <p> Cricket and Football </p>


                </div>

            </div>




          </section>


          <div class="dip-clear"></div>

          <hr class="common-hr" >
    <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Education </h2>
                </div>
               <div class="right-d" >
                <h3>School</h3>
                <h4> Comilla Zilla school</h4>
                <p>Kandirpar,Comilla</p>
                <p>2009 to 2015</p>
                <h3>College</h3>
                <h4> Comilla Shikkha Board Model College, Comilla</h4>
                <p>Shaktola,Comilla</p>
                <p>2015 to 2017</p>
                <h3>University</h3>
                <h4>Daffodil International University</h4>
                <p>BSc in Computer Science and Engineering</p>
                <p>Daffodil International University Permanent Campus,Ashulia </p>
                <p>Dhaka,Bangladesh</p>
                <p>2017 to 2021 </p>

                </div>

            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >







        </main>
         <div class="dip-clear"></div>


        <footer class="fc">
         <div class="btn-group">


  <a href="template2from.php"><button class="button">Get CV</button></a>
  <a href="home.php"><button class="button">Home</button></a>
  <a href="profile.php"><button class="button">My CV</button></a>
  <a href="logout_cor.php"><button class="button">Log Out</button></a>
</div>



        </footer>


             <div class="dip-clear"></div>
       <hr class="common-hr" >


    </div>


</body>
</html>
