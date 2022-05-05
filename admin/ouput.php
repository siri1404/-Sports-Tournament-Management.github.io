<?php
session_start();
include("../include/connection.php");
$q= "select * from schedule";
$query=mysqli_query($connect,$q);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<title>Event schedule</title>
</head>
<body>

	<?php 
    include ("../include/header.php");
    ?>
<div class="container mt-5">
          
          <!-- top -->
          <div class="row">
              <div class="col-lg-8">
                  <h1>View Events List</h1>
                  <a href="addevent.php">Add Event</a>
              </div>
            </div>
</div>

<div class="row mt-4">

            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $qq['sport']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo 
                            $qq['category']; ?>
                        </h6>
                        <p class="text-info">TEAM_1_NUMBER: 
                        	<?php echo 
                            $qq['team_1_number']; ?>
                        </p>
                        <p class="text-info">TEAM_2_NUMBER: 
                        	<?php echo 
                            $qq['team_2_number']; ?>
                        </p>
                        <p class="text-info">start_time: 
                        	<?php echo 
                            $qq['start_time']; ?>
                        </p>
                        <p class="text-info">End time: 
                        	<?php echo 
                            $qq['end_time']; ?>
                        </p>
                        <a href=
                        "delete.php?id=<?php echo $qq['id']; ?>" 
                            class="card-link">
                            Delete
                        </a>
                        <a href=
                        "update.php?id=<?php echo $qq['id']; ?>" 
                            class="card-link">
                            Update
                        </a>
                    </div>
                </div><br>
            </div>
            <?php
                }
            ?>
        </div>
    </div>




</body>
</html>