<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>hh</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
<?php
       require 'connexion.php';
       if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT * FROM employee where id ='$id'";
        $q=mysqli_query($con,$sql);
        $rows=mysqli_fetch_assoc($q);
        $matricule=$rows['matricule'];
        $fname=$rows['prenom'];
        $nom=$rows['nom'];
        $date=$rows['date'];
        $departement=$rows['departement'];
        $salaire=$rows['salaire'];
        $fonction=$rows['fonction'];
        $image=$rows['image'];
       }
    ?>
    <h1>COMPANY</h1>
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder="Have a question? Ask Now"> <button class="btn btn-primary">Search</button> </div>
            </div>
        </div>
    </div>
    <BR><BR>
    <form method="POST" action="pme.php?<?php
     if (isset($_GET['id'])){ echo "id=update";

     }?>" style=" display: flex;flex-direction: column; ">
    
        
      
        <input type="text" name="matricule" placeholder="Matricule" class="form-control" value="<?php
        if(isset($_GET['id'])){echo $matricule;
        }?>"><br>
        
        <input type="text" name="prénom" placeholder="prénom" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $fname;
        }?>"><br>
        <input type="text" name="nom" placeholder="nom" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $nom;
        }?>"><br>
        <input type="date" name="date" placeholder="Date de naissance" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $date;
        }?>"><br>
        <input type="text" name="département" placeholder="Département" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $departement;
        }?>"><br>
        <input type="number" name="salaire" placeholder="Salaire" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $salaire;
        }?>"><br>
        <input type="text" name="fonction" placeholder="Fonction" class="form-control"value="<?php
        if(isset($_GET['id'])){echo $fonction;
        }?>"><br>
        <input type="file" name="image" class="form-control" value="<?php
        if(isset($_GET['id'])){echo $image;
        }?>">
         <input type="hidden" name="id" value="<?php
        echo $_GET['id']; ?>">
        <button type="submit"><a href="pme.php" style="width:4%"></a> <?php
        if(isset($_GET['id'])){
            echo "edit";
        
        }
        else{
            echo "save";
        }
        ?></button>
        <a href="aff.php">click me </a>

    </form>
</body>
</html