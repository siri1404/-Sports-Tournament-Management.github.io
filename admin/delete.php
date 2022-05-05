<?php
    include("../include/connection.php");
    $id = $_GET['id'];
    $q = "delete from schedule where Id = $id ";
    mysqli_query($connect,$q);    
?>