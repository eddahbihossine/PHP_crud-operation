<?php
require "connexion.php";
$id =$_GET['id'];
$sql = "DELETE FROM employee where id ='$id'";
$query = mysqli_query($con,$sql);
if(isset($query)){
    header("location:aff.php");

}

?>