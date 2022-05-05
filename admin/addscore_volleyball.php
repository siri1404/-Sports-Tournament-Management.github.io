<?php
    include("../include/connection.php");
    if(isset($_POST['btn']))
    {
        $team_1_number=$_POST['team_1'];
        $team_2_number=$_POST['team_2'];
        $category=$_POST['category'];
        $court_number=$_POST['court'];
        $id = $_GET['id'];
        $winning_team = $_POST['winning_team'];
        $ql="insert into volleyball(team_id,team_1_number,
            team_2_number,category,court_number,winning_team)
            values($id,$team_1_number,$team_2_number,'$category',$court_number,'$winning_team');";
        mysqli_query($connect,$ql);
        header('location:addscore.php');
    } 
    else if(isset($_GET['id'])) 
    {
        $q = "SELECT * FROM schedule WHERE Id='".$_GET['id']."'";
        $query=mysqli_query($connect,$q);
        $res= mysqli_fetch_array($query);
    }
    
?>
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
    <title>ADD RESULT</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
    <?php 
    include ("../include/header.php");
    ?>
    <div class="container mt-5">
        <h1>ADD RESULT</h1>
        <form method="post">
            <div class="form-group">
                <label>team_1_number</label>
                <input type="text" 
                    class="form-control" 
                    name="team_1" 
                    placeholder="team_1_number" 
                    value=
        "<?php echo $res['team_1_number'];?>" />
            </div>
  
            <div class="form-group">
                <label>team_2_number</label>
                <input type="text" 
                    class="form-control" 
                    name="team_2" 
                    placeholder="team_2_number" 
value="<?php echo $res['team_2_number'];?>" />
            </div>

            <div class="form-group">
                <label>category</label>
                <input type="text" 
                    class="form-control" 
                    name="category" 
                    placeholder="category" 
                    value=
        "<?php echo $res['category'];?>" />
            </div>

            <div class="form-group">
                <label>sport</label>
                <input type="text" 
                    class="form-control" 
                    name="sport" 
                    placeholder="sport" 
                    value=
        "<?php echo $res['sport'];?>" />
            </div>

            <div class="form-group">
                <label>Court_number</label>
                <input type="text" 
                    class="form-control" 
                    name="court" 
                    placeholder="Court_number" 
                    value=
        "<?php echo $res['court_number'];?>" />
            </div>
            <div class="form-group">
                <label>Winning team</label>
                <select class="form-control" 
                    name="winning_team">
                    <option value="<?php  echo $res['team_1_number'];?>">
                        Team_1
                    </option>
                    <option value="<?php echo $res['team_2_number'];?>">
                        Team_2
                    </option>
                    <option value="0">
                        Draw
                    </option>
                </select>
            </div>
  
            <div class="form-group">
                <input type="submit" value="Update" 
                    name="btn" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
  
</html>