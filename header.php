  <?php
require_once "blogin" ;


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MY CV</title>
	<link rel="stylesheet" href="index.css">
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

</body>
</html>