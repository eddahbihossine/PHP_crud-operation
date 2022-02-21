<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA </h1><hr>
    <table border =1 width=60% >
        <tr>
            <th>matricule</th>
            <th>prenom</th>
            <th>nom</th>
            <th>date</th>
            <th>departement</th>
            <th>salaire</th>
            <th>fonction</th>
            <th>image</th>
            <th></th>
        </tr>

    <?php
    require 'connexion.php';
$request = "SELECT * FROM `employee`";
$query = mysqli_query($con,$request);
    while($rows=mysqli_fetch_assoc($query)){
        $id=$rows["id"];
        echo "<tr>";
        echo"<td>".$rows['matricule']."</td>";
        echo"<td>".$rows['prenom']."</td>";
        echo"<td>".$rows['nom']."</td>";
        echo"<td>".$rows['date']."</td>";
        echo"<td>".$rows['departement']."</td>";
        echo"<td>".$rows['salaire']."</td>";
        echo"<td>".$rows['fonction']."</td>";
        echo"<td>".$rows['image']."</td>";
        echo "<td><a href='delete.php?id=".$id."'> delete</a></td>";
        echo "<td><a href='index.php?id=".$id."'>edit</a></td>";

        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>