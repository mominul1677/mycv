	<?php
require_once "after_login" ;


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY CV</title>
	<link rel="stylesheet" href="index.css">
</head>
<body class="singup_page">
	
	<header  class="">
		<a href="index.php" title=""><img class="logo" src="image/mucv5.png" alt=""></a>
		<a href="index.php" title=""><h2>Welcome My CV</h2></a>
		<nav class="nav_Link">
			<ul>
				<li><a href="index.php" title="">Home</a></li>
				<li><a href="login.php" title="">Login</a></li>
				<li><a href="about.php" title="">About</a></li>
			</ul>
		</nav>

	</header>
	<!-- /sing up box -->
	<div class="signUpBox">
		<h1>Sign Up</h1>
				<?php
		if (isset($_GET["error"])) {
			if ($_GET["error"]=="emptyfields") {
				echo '<h4 class="wrong_info">Fill up all information</h4>';
			}
			else{
				echo '<h4 class="wrong_info">Your password does not match</h4>';

			}
			
			
		
			
		
	}


		?>
		
		<form action="sign_up_core.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
			<input class="signUpInputBoxLname" type="text" placeholder="First name" name="fName">
			<input class="signUpInputBoxLname" type="text" placeholder="Last  name" name="lName">
			<input class="signUpInputBoxLname" type="email" placeholder="Email" name="user_email">
			<input class="signUpInputBoxLname" type="password" placeholder="Password" name="password">
			<input class="signUpInputBoxLname" type="password" placeholder="Repeat password" name="rep-password">
						<button class="signUpInputBoxLname" type="submit" name="signuo-submit">Sign Up</button>
		</form>
	

		

	</div>
	

</body>

</html>