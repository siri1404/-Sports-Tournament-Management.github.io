<?php

session_start();
?>

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
    <title>DBMS Project</title>
<style>
  .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;}
</style>
</head>
<body>

	<?php 
	include ("../include/header.php");
	?>

	<section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap -m-2">
            <div class="xl:w-1/3 md:w-1 p-3">
              <div class="bg-gray-100 p-6 rounded-lg">
                <a href="addteam.php">
                <button class="button button1">ADD TEAM</button>
                </a>    
            </div>
            </div>
            <div class="xl:w-1/3 md:w-1 p-3">
              <div class="bg-gray-100 p-6 rounded-lg">
                <a href="addscore.php">
                <button class="button button1">ADD SCORES</button>
                </a>
            </div>
            </div>

            <div class="xl:w-1/3 md:w-1 p-3">
              <div class="bg-gray-100 p-6 rounded-lg">
                <a href="addevent.php">
                <button class="button button1">ADD EVENT</button>
                </a>
            </div>
            </div>
            
          </div>
        </div>
      </section>


</body>
</html>