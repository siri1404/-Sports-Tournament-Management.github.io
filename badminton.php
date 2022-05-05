<?php
  include("include/connection.php");
  if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{

    $q = "SELECT * FROM badminton";
    $result = mysqli_query($connect, $q);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
      <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
    
  <title>DBMS Laboratory Project</title>
</head>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
<body>
  
  <?php 
    include ("include/header.php");
  ?>
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section">TOTAL RESULTS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-wrap">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th>Category</th>
                  <th>Team 1 Name</th>
                  <th>Team 2 Name</th>
                  <th>Court Number</th>
                  <th>Winning Team</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = mysqli_fetch_array($result))

                  { $q1 = "SELECT team_name as team_1_name FROM teams where team_number = '".$row['team_1_number']."'";
                    $res1 = mysqli_query($connect, $q1);
                    $row1 = mysqli_fetch_array($res1);
                    $q2 = "SELECT team_name as team_2_name FROM teams where team_number = '".$row['team_2_number']."'";
                    $res2 = mysqli_query($connect, $q2);
                    $row2 = mysqli_fetch_array($res2);
                    $q3 = "SELECT team_name as team_name FROM teams where team_number = '".$row['winning_team']."'";
                    $res3 = mysqli_query($connect, $q3);
                    $row3 = mysqli_fetch_array($res3);?>
                <tr>
                  <td><?php echo $row['category'];?></td>
                  <td><?php echo $row1['team_1_name'];?></td>
                  <td><?php echo $row2['team_2_name'];?></td>
                  <td><?php echo $row['court_number'];?></td>
                  <td><?php echo $row3['team_name'];?></td>

                </tr>
                <?php
                  }
                ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>





</body>
</html>