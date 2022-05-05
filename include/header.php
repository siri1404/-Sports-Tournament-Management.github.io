<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>DBMS Project</title>
</head>
<body>
	<header class="text-gray-600 body-font">
			<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
				<img src="https://thumbs.dreamstime.com/b/color-sport-background-football-soccer-basketball-hockey-box-tennis-baseball-vector-illustration-colorful-people-silhouettes-color-139030119.jpg" width=10%>
				<a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
					<span class="ml-3 text-xl">DBMS Laboratory Project</span>
				</a>
				<nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
					<?php
						if (isset($_SESSION['admin'])){
							$user = $_SESSION['admin'];
							echo'
							<a href="adminlogin.php" class = "nav-link text-gray-900">'.$user.'</a>
							<a href="logout.php" class = "nav-link text-gray-900">logout</a>
							';
						}
						else{
							echo'
							<a href="index.php" class = "nav-link text-gray-900">Home</a>
                           <a href="features.html" class = "nav-link text-gray-900">Features</a>
                           <a href="catalog.html" class = "nav-link text-gray-900">Sports</a>
                           <a href="team.html" class = "nav-link text-gray-900">Team</a>
                           <a href="adminlogin.php" class = "nav-link text-gray-900">Admin</a>


                           ';

						}

					?>
				</nav>


				
			</div>
			
		</nav>
		
	</header>



    


</body>
</html>

