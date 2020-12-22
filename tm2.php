  <?php
require_once "blogin" ;


?>
<?php
$userhName = $_REQUEST["fname"];
$userproName = $_REQUEST["proName"];
$useremail = $_REQUEST["email"];
$userfackboock = $_REQUEST["fackboock"];
$userphoneNumber = $_REQUEST["phoneNumber"];
 $userpName = $_REQUEST["pName"];
$userpermanentAddress = $_REQUEST["permanentAddress"];
$userpresentAddress = $_REQUEST["presentAddress"];
$userworkExperienc = $_REQUEST["workExperienc"];
$userskill = $_REQUEST["skill"];
$userschoolName = $_REQUEST["schoolName"];
$userschoolAddress = $_REQUEST["schoolAddress"];
$userspYear = $_REQUEST["spYear"];
$usercName = $_REQUEST["cName"];
$usercAddress = $_REQUEST["cAddress"];
$usercpYear = $_REQUEST["cpYear"];
$useruName = $_REQUEST["uName"];
$useruAddress = $_REQUEST["uAddress"];
$userupYear = $_REQUEST["upYear"];
$userupudName = $_REQUEST["udName"];


 
 
 



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
  
    <div class="Container">
        <header> 
            
           <div class="header-bio">
               <h2> <?php  echo $userhName ;  ?> </h2>
               <h3> <?php  echo $userproName ; ?> </h3>

           </div>
           <div class="header-contact">
               <p> <a href="mailto:mi.saikat98@gmail.com"> <?php echo $useremail ; ?> </a> </p>
               <p> <a href="https://web.facebook.com/md.mominulislam.pramanik.16"> <?php echo $userfackboock ;  ?> </a> </p>
               <p> <a href="tel:+8801913692074"> <?php echo $userphoneNumber ; ?> </a> </p>


           </div>


        </header>
        <div class="dip-clear"></div>
        <hr class="hr1" >
        <main>
          <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Parsonal Information </h2>
                </div>
               <div class="right-d" >
                <p> Name: <?php echo  $userpName ; ?> 
                </p>
                <p>Permanent Address: <?php echo $userphoneNumber ; ?> </p>
                 <p> Present Address: <?php echo $userphoneNumber ; ?> </p>
                 <p> </p>
                
                </div>
              
            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >
    <section personal-section>
            <div class="content1">

               <div class="feft-d" > <h2> Work Experienc </h2>
                </div>
               <div class="right-d" >

                <h2> <?php echo $userworkExperienc ; ?>  </h2>
                
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
                <h3> <?php echo  $userskill ; ?> </h3>

                 
                
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
                <h4> <?php echo  $userschoolName ; ?> </h4>
                <p><?php echo  $userschoolAddress ; ?> </p>
                <p><?php echo  $userspYear ?> </p>
                <h3>College</h3>
                <h4> <?php echo  $usercName ; ?> </h4>
                <p><?php echo  $usercAddress ; ?> </p>
                <p><?php echo  $usercpYear ; ?> </p>
                <h3>University</h3>
                <h4><?php echo  $useruName ; ?> </h4>
                <p><?php echo  $userupudName ; ?> </p>
                <p><?php echo  $useruAddress; ?> </p>
                <p><?php echo  $userupYear ?>  </p>
                
                </div>
              
            </div>
    </section>

          <div class="dip-clear"></div>

          <hr class="common-hr" >

            
            
           
           


        </main>
         <div class="dip-clear"></div>

         

        <footer class="fc">
         <p> <a href="mailto:mi.saikat98@gmail.com"> Email</a> 
                <a href="https://web.facebook.com/md.mominulislam.pramanik.16"> Faceboock</a> 
                <a href="tel:+8801913692074"> phone </a> </p>



        </footer>
             <div class="dip-clear"></div>
       <hr class="common-hr" >
          <div class="dip-clear"></div>
    <div class="get_cv">
      <a href="#" title=""><button >Downlod CV</button></a>

    </div>
          <div class="dip-clear"></div>
       <hr class="common-hr" >
          <div class="dip-clear"></div>
   

    </div>

    </div>

  

   
</body>
</html>