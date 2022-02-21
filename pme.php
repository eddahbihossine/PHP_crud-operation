<?php
require "connexion.php";
if(isset($_GET['id'])){
    $matricule = $_POST["matricule"];
$fname = $_POST["prénom"];
$nom = $_POST["nom"];
$date = $_POST["date"];
$departement =$_POST["département"];
$salaire = $_POST["salaire"];
$fonction = $_POST["fonction"];
$image = $_POST["image"];
$id=$_POST['id'];
$sql = "UPDATE `employee` set matricule='$matricule',prenom ='$fname',nom='$nom',date ='$date',departement='$departement',
salaire='$salaire',fonction ='$fonction', image ='$image' where id='$id'";
$query =mysqli_query($con,$sql);
if(isset($_GET['id'])){
    echo "tbdlat lktaba hh";

}


}
else{
$matricule = $_POST["matricule"];
$fname = $_POST["prénom"];
$nom = $_POST["nom"];
$date = $_POST["date"];
$departement =$_POST["département"];
$salaire = $_POST["salaire"];
$fonction = $_POST["fonction"];
$image = $_POST["image"];


$request = " INSERT INTO employee ( `matricule`, `prenom`, `nom`, `date`, `departement`, `salaire`, `fonction`, `image`) VALUES(
    '$matricule','$fname','$nom','$date','$departement','$salaire','$fonction','$image')";
$query = mysqli_query($con,$request);
if(isset($query)){
    echo("<h1>you are all set </h1>");
    
}
else{
    echo("<h1>something is wrong</h1>");
}
}
?>