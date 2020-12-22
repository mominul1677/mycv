<?php
require_once "blogin" ;
require_once("connect.php");

    $query = "SELECT * FROM user WHERE  user_email='".$_SESSION["userEmail"]."'";
    $result = mysqli_query ($connect , $query);
    $result = mysqli_fetch_assoc($result);
//    echo '<pre>';print_r($result);exit;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY CV</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="template3.css">
</head>
<body>
	<header  class="">
		<a href="home.php" title=""><img class="logo" src="image/mucv5.png" alt=""></a>
		<a href="profile.php" title=""><h2><?php echo $_SESSION["userEmail"];?></h2></a>

		<nav class="nav_Link">
			<ul>
			<?php

					if ( isset($_SESSION["userEmail"])) {
						echo '<li><a href="home.php" title="">Home</a></li>';
						echo '<li><a href="logout_cor.php" title="">Logout</a></li>';
						echo '<li><a href="#" title="">About</a></li>';


				}
				else{
					echo '<li><a href="#" title="">MY CV</a></li>';
				}

			?>




			</ul>
		</nav>

	</header><!-- /header -->
    <?php
       if (isset($_GET["success"])) {
       	echo '<p class="success">Your data has been successfully saved</p>';

       }


    ?>

    <div class="Container">
        <div class="header">
            <img class="profile-photo" src="<?= $result['image_name']?$result['image_name']:'2.jpg' ?>">
           <div class="header-bio">
               <h2><h2><?php echo $_SESSION["userEmail"];?> </h2>
               <h3> FrontEnd Web Designer </h3>

           </div>

          <div class="dip-clear"></div>
           <div class="header-contact">


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
                <p> Name: <?= $result['db_hName'] ?>
                </p>
                <p>Permanent Address: <?= $result['db_permanentAddress'] ?></p>
                 <p> Present Address: <?= $result['db_presentAddress'] ?></p>
                 <p> </p>

                </div>

            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >
    <?php if($result['db_workExperienc'] && $result['db_workExperienc']!='null'){ ?>
    <section personal-section>
            <div class="content1">
               <div class="feft-d" > <h2> Work Experience </h2>
                </div>
               <div class="right-d" >
                <h3>Join Secretary</h3>
                <p>Daffodil International University Film Society - DIUFS-PC.</p>
                <h3>Student Prefect</h3>
                <p> CSE Department Daffodil International University </p>

                </div>

            </div>
    </section>
    <?php } ?>

          <div class="dip-clear"></div>

          <hr class="common-hr" >




          <section personal-section>
            <div class="content1">

               <div class="feft-d" >
                <h1> Skill </h1>
                </div>
               <div class="right-d" >
                <h3> Programming languages </h3>
                <p> HTML,CSS,Android.
                </p>
                <h3> Teaching </h3>
                <p> Student Prefect</p>
                <h3> Sports </h3>
                <p> Batminton,Chess </p>


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
                <h4> K.B School</h4>
                <p>Agriculture University,Mymensingh</p>
                <p>2007 to 2015</p>
                <h3>College</h3>
                <h4> K.B College, Mymensingh</h4>
                <p>Agriculture University,Mymensingh</p>
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
        <footer class="fc">
         <div class="btn-group">


  <a href="template2.php"><button class="button">Download CV</button></a>
  <a href="editForm.php"><button class="button">Edit CV</button></a>
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
