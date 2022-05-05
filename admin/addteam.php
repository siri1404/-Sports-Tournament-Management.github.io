<?php

session_start();

include("../include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Add Team</title>
</head>
<body>

    <?php 
    include ("../include/header.php");
    ?>

    <div class="container mt-5">
        <h1>Add Team</h1>
        <form action="addteam.php" method="POST">
            <div class="form-group">
                <label>Team_number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="team_number" 
                    name="team_number" />
            </div>
  
            <div class="form-group">
                <label>Team_name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Team_name" 
                    name="team_name" />
            </div>

            <div class="form-group">
                <label>category</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="category" 
                    name="category" />
            </div>
            <br>


            <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            
            $team_number=$_POST['team_number'];
            $team_name=$_POST['team_name'];
            $category=$_POST['category'];
            
      
  
            $q="insert into teams(team_number,
            team_name,category)
            values($team_number,'$team_name','$category')";
  
            mysqli_query($connect,$q);
        }
          
        
    ?>


      

</body>
</html>