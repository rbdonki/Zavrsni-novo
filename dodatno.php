<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <div class="container">
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            </head>
            <body>
            <style>
                body{
                    background: url('https://croatia.hr/sites/default/files/styles/image_full_width/public/2018-08/bol-zlatni-rat-ivo-biocina-1.jpg?itok=8nn25Gi0') no-repeat center fixed;
                    background-size: cover;
                }  
            </style>
            <?php
                $ID_Brod=$_GET['id'];
                $user = 'root';
                $password = '';
                $db = 'brodovi';
                $db = new mysqli('localhost', $user, $password, $db);
                $sql = "SELECT * FROM brodovi WHERE ID ='$ID_Brod'";
                $records = mysqli_query($db, $sql);
                $row = mysqli_fetch_array($records);
                echo"<div class='card' style='width:1000px; background-color:rgba(255,255,255,0.6)'>";
                echo "<img src='".$row['link_slika']."'style='width:750px;margin-left:100px;margin-top:25px'</br>";
                echo"<h3 style='margin-left:100px;margin-top:25px'>".$row['model']."</h3>"; 
                echo"<h3 style='margin-left:100px;margin-top:25px'>Duljina: ".$row['duljina']."</h3>"; 
                echo"<h3 style='margin-left:100px;margin-top:25px'>Maksimalan broj putnika: ".$row['br_ljudi']."</h3>";
                echo"<h3 style='margin-left:100px;margin-top:25px'>Godina proizvodnje: ".$row['godina']."</h3>"; 
                echo "<br/><a href=bookiranje.html style='margin-left:100px;margin-top:25px;margin-bottom:25px'><button>Bookiraj</button></a>";
                echo"</div>";
            ?>
        </div>
    </body>
</html>