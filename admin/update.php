<?php
    include("../include/connection.php");
    if(isset($_POST['btn']))
    {
        $team_1_number=$_POST['team_1'];
        $team_2_number=$_POST['team_2'];
        $category=$_POST['category'];
        $court_number=$_POST['court'];
        $id = $_GET['id'];
        $start_team = $_POST['s_time'];
        $end_time = $_POST['e_time'];
        $q="update into schedule(team_1_number,
            team_2_number,category,court_number,start_time, end_time)
            values($team_1_number,$team_2_number,'$category',$court_number,'$start_time', '$end_time');";
        $query=mysqli_query($connect,$q);
        header('location:addevent.php');
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
    <title>Update List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
  
<body>
    <?php 
    include ("../include/header.php");
    ?>
    <div class="container mt-5">
        <h1>Update Event List</h1>
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
                <label>Strat Time</label>
                <input type="text" 
                    class="form-control" 
                    name="s_time" 
                    placeholder="start_time" 
                    value=
        "<?php echo $res['start_time'];?>" />
            </div>

            <div class="form-group">
                <label>End time</label>
                <input type="text" 
                    class="form-control" 
                    name="e_time" 
                    placeholder="end_time" 
                    value=
        "<?php echo $res['end_time'];?>" />
            </div>

            <br>
  
            <div class="form-group">
                <input type="submit" value="Update" 
                    name="btn" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
  
</html>