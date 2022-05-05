<?php

session_start();

include("../include/connection.php");
$result = mysqli_query($connect,"SELECT distinct category FROM teams");

if(isset($_POST["btn"])) {
            
            $category = mysqli_real_escape_string($connect,$_POST['category']);
            $team_1_number=$_POST['team_1'];
            $team_2_number=$_POST['team_2'];
            $sport=$_POST['sport'];
            $start_time=$_POST['s_time'];
            $end_time=$_POST['e_time'];
            $court_number=$_POST['court'];
            $date = $_POST['Date'];
      
  
            $q="insert into schedule(team_1_number,
            team_2_number,category,sport,start_time,end_time,court_number, Date)
            values($team_1_number,$team_2_number,'$category','$sport','$start_time','$end_time',$court_number, '$date')";
  
            if(mysqli_query($connect,$q))
        {
            echo '<script>alert("Product added successfully")</script>';
        }
        header('location:addscore.php');
}

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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">    <title>Add event</title>
</head>
<body>

    <?php 
    include ("../include/header.php");
    ?>

    <div class="container mt-5">
        <h1>Add Event</h1>
        <form action="addevent.php" method="POST">

            <div class="form-group">
                
                
            </div>

            <div class="form-group">
                <label>Team_1_number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Team_1_number" 
                    name="team_1" >
            </div>
  
            <div class="form-group">
                <label>Team_2_number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Team_2_number" 
                    name="team_2" >
            </div>

            <div class="form-group">
                <label for="CATEGORY-DROPDOWN">category</label>
                <select class="form-control" id="category-dropdown" name="category">
                              <option value="category">Select Category</option>
                              <?php
                                 while($row = mysqli_fetch_array($result)){
                                ?>
                              <option  value="<?php echo $row['category'];?>"><?php echo $row["category"];?></option>
                              <?php
                                 }
                                ?>
                </select>
            </div>

            <div class="form-group">
                <label>sport</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="sport" 
                    name="sport" >
            </div>

            <div class="form-group">
                <label>Court_number</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="court_number" 
                    name="court">
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" 
                    class="form-control" 
                    placeholder="Date" 
                    name="date">
            </div>

            <div class="form-group">
                <label>start Time</label>
                <input type="time" 
                    class="form-control" 
                    placeholder="start_time" 
                    name="s_time">
            </div>

            <div class="form-group">
                <label>End Time</label>
                <input type="time" 
                    class="form-control" 
                    placeholder="end_time" 
                    name="e_time">
            </div>
            <br>
            <br>

            <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>
        </form>
       
    
    </div>




      

</body>
</html>