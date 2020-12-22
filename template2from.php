	<?php
require_once "blogin" ;


?>
	<?php
require_once "header.php" ;


?>
<div class="tm2From">
	     <center>
	     	<h1> Please fill up your information </h1>


	     </center>
		<form action="template_from_core.php" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
			<h1>Header</h1>
			<input type="text" placeholder="Name" name="fname">
			<input type="text" placeholder="Professsion" name="proName">
			<input type="email" placeholder="Email" name="email">
			<input type="text" placeholder="Faceboock" name="fackboock">
			<input type="text" placeholder="Phone Number" name="phoneNumber">
			<h1>Parsonal Information</h1>
			<input type="text" placeholder="Name" name="pName">
			<input type="text" placeholder="Permanent Address" name="permanentAddress">
			<input type="text" placeholder="Present Address" name="presentAddress">
			<h1>Work Experienc</h1>
			<input type="text" placeholder="Work Experienc" name="workExperienc">
			<h1>Skill</h1>
			<input type="text" placeholder="Skill" name="skill">
			<h1>Education</h1><br>

			<h3>School</h3>
			<input type="text" placeholder="School Name" name="schoolName">
			<input type="text" placeholder="School Address" name="schoolAddress">
			<input type="text" placeholder="Passing year" name="spYear">
			<h3>College</h3>
			<input type="text" placeholder="College Name" name="cName">
			<input type="text" placeholder="Pssing Year" name="cpYear">
			<input type="text" placeholder="College Address" name="cAddress">

			<h3>University</h3>
			<input type="text" placeholder="University Name" name="uName">
			<input type="text" placeholder="Department" name="udName">
			<input type="text" placeholder="Pssing Year" name="upYear">
			<input type="text" placeholder="University Address" name="uAddress">
			<h3>Uplode your Photo</h3>
			<input type="file" placeholder="up your photo" name="fileToUpload" id="fileToUpload">



            <input type="submit" name="submit" class="user_form" value="Submit">



		</form>
