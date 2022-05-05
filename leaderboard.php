<?php
  include("include/connection.php");
  if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit();
}else{

    $q = "SELECT * FROM teams";
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
          <h2 class="heading-section">TOTAL POINTS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="table-wrap">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th>Team Number</th>
                  <th>Team Name</th>
                  <th>Category</th>
                  <th>No_of_Wins</th>
                  <th>No_of_Losses</th>
                  <th>No_of_Draws</th>
                  <th>Total Points</th>
                </tr>
              </thead>
              <tbody>
                <?php
                while($row = mysqli_fetch_array($result))

                  {
                    $q1 = "SELECT count(winning_team) as count FROM basketball where winning_team = '".$row['team_number']."'";
                    $res1 = mysqli_query($connect, $q1);
                    $row1 = mysqli_fetch_array($res1);

                    $q101 = "SELECT count(winning_team) as count101 FROM volleyball where winning_team = '".$row['team_number']."'";
                    $res101 = mysqli_query($connect, $q101);
                    $row101 = mysqli_fetch_array($res101);

                    $q102 = "SELECT count(winning_team) as count102 FROM badminton where winning_team = '".$row['team_number']."'";
                    $res102 = mysqli_query($connect, $q102);
                    $row102 = mysqli_fetch_array($res102);

                    $q103 = "SELECT count(winning_team) as count103 FROM tennis where winning_team = '".$row['team_number']."'";
                    $res103 = mysqli_query($connect, $q103);
                    $row103 = mysqli_fetch_array($res103);

                    $ret101 = array();
                    $ret101['coun1'] = $row1['count'] + $row101['count101'] + $row102['count102'] + $row103['count103'];

                    $q2 = "SELECT count(*) as count1 FROM basketball where winning_team != '".$row['team_number']."' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res2 = mysqli_query($connect, $q2);
                    $row2 = mysqli_fetch_array($res2);

                    $q201 = "SELECT count(*) as count201 FROM volleyball where winning_team != '".$row['team_number']."' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res201 = mysqli_query($connect, $q201);
                    $row201 = mysqli_fetch_array($res201);

                    $q202 = "SELECT count(*) as count202 FROM badminton where winning_team != '".$row['team_number']."' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res202 = mysqli_query($connect, $q202);
                    $row202 = mysqli_fetch_array($res202);

                    $q203 = "SELECT count(*) as count203 FROM tennis where winning_team != '".$row['team_number']."' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res203 = mysqli_query($connect, $q203);
                    $row203 = mysqli_fetch_array($res203);

                    $ret102 = array();
                    $ret102['coun2'] = $row2['count1'] + $row201['count201'] + $row202['count202'] + $row203['count203'];

                    $q3 = "SELECT count(*) as count2 FROM basketball where winning_team = 'Draw' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res3 = mysqli_query($connect, $q3);
                    $row3 = mysqli_fetch_array($res3);

                    $q301 = "SELECT count(*) as count301 FROM volleyball where winning_team = 'Draw' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res301 = mysqli_query($connect, $q301);
                    $row301 = mysqli_fetch_array($res301);

                    $q302 = "SELECT count(*) as count302 FROM tennis where winning_team = 'Draw' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res302 = mysqli_query($connect, $q302);
                    $row302 = mysqli_fetch_array($res302);

                    $q303 = "SELECT count(*) as count303 FROM badminton where winning_team = 'Draw' AND (team_1_number =  '".$row['team_number']."' OR team_2_number = '".$row['team_number']."') ";
                    $res303 = mysqli_query($connect, $q303);
                    $row303 = mysqli_fetch_array($res303);

                    $ret103 = array();
                    $ret103['coun3'] = $row3['count2'] + $row301['count301'] + $row302['count302'] + $row303['count303'];


                    $p = "INSERT INTO scores (team_number, team_name, category) SELECT * FROM (SELECT '".$row['team_number']."', '".$row['team_name']."', '".$row['category']."') AS tmp WHERE NOT EXISTS ( SELECT team_number FROM teams WHERE team_number = '".$row['team_number']."')";
                    mysqli_query($connect, $p);

                    $ret = array();
                    $ret['coun'] = $ret101['coun1'] - $ret102['coun2'];?>
                <tr>
                  <td><?php echo $row['team_number'];?></td>
                  <td><?php echo $row['team_name'];?></td>
                  <td><?php echo $row['category'];?></td>
                  <td><?php echo $ret101['coun1'];?></td>
                  <td><?php echo $ret102['coun2'];?></td>
                  <td><?php echo $ret103['coun3'];?></td>
                  <td><?php echo $ret['coun'];?></td>

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