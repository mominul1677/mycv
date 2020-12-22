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

	</style>
</head>
<body>
	<header  class="">
		<a href="index.php" title=""><img class="logo" src="image/mucv5.png" alt=""></a>
		<a href="index.php" title=""><h2>Welcome My CV</h2></a>
		<nav class="nav_Link">
			<ul>
				<li><a href="index.php" title="">Home</a></li>
				<li><a href="signup.php" title="">Sing Up</a></li>
				<li><a href="about.php" title="">About</a></li>
			</ul>
		</nav>
		<!-- /navbar end -->

	</header><!-- /login box -->
	<div class="login_from">
		<h1>Login</h1>
		<?php
		if (isset($_GET["Wrong_info"])) {
			echo '<h4 class="wrong_info">Wrong information check your email & password</h4>';
		}

		?>
	<form action="login_core.php" method="post" accept-charset="utf-8">
		<img src="">
		<input class="login_inputBox_un" type="text" placeholder="Email" name="uName">
		<br>
		<input class="login_inputBox_p" type="password" placeholder="Password" name="upassword">
		<br>
		<button class="login_button" type="submit" name="login">Login</button>
		<!-- /login box end -->
	</form>
	</div>
	
	
</body>
</html>