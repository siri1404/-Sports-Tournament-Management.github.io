<?php

session_start();


include("include/connection.php");

if(isset($_POST['login'])){

	$username = $_POST['uname'];
	$password = $_POST['pass'];

	$error = array();
	if(empty($username)) {
		$error['admin'] = "Enter username";

	}else if(empty($password)){
		$error['admin'] = "Enter password";

	}

	if(count($error) == 0){
		$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

		$result = mysqli_query($connect, $query);

		if(mysqli_num_rows($result)==1){
			echo "<script>alert('You have login as admin')</script>";
			$_SESSION['admin'] = $username;

			header("Location:admin/index.php");
			exit();

		}else{
			echo "<script>alert('Invalid username or password')</script>";
		}
	}
}




?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin login Page</title>
</head>
<body>

	<?php
	include("include/header.php");
	?>

	<section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
          <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
            <h1 class="title-font font-medium text-3xl text-gray-900">Admin Login</h1>
            <p class="leading-relaxed mt-4">Login with admin user name and password to gain read, write and edit access to the databases.</p>
          </div>

          	<form method="post" class="my-2">

          		<div>
          			<?php

          			if(isset($error['admin'])){
          				$sh = $error['admin'];

                  $show = "<h4 class='alert alert-danger'>$sh</h4>";

          			}else{
          				$show = "";

          			}

          			echo $show;



          			?>
          		
          		<h2 class="text-gray-900 text-lg font-medium title-font mb-5">Login</h2>

            <div class="relative mb-4">

              <label for="full-name" class="leading-7 text-sm text-gray-600">User Name</label>
              <input type="text" id="full-name" name="uname" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" autocomplete="off" placeholder="Enter username">
            </div>
            <div class="relative mb-4">
              <label for="email" class="leading-7 text-sm text-gray-600">Password</label>
              <input type="password" id="password" name="pass" class="w-full bg-white rounded border border-gray-300 focus:border-red-500 focus:ring-2 focus:ring-red-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button type = "submit" name = "login" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg" value = "Login">Submit</button>
          </div>
      </form>
        </div>
      </section>

</body>
</html>