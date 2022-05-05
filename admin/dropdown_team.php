<?php

session_start();

include("../include/connection.php");

$category = $_POST["category"];
$result = mysqli_query($connect,"SELECT * FROM teams where category = '$category'");
?>
<option value="">Select SubCategory</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["team_number"];?>"><?php echo $row["team_number"];?></option>
<?php
}
?>