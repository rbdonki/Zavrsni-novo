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
            }
            </style>
            <table>
                <div class="column">
                    <div class="row">
                        <?php
                       
                        $user = 'root';
                        $password = '';
                        $db = 'brodovi';
                        $db = new mysqli('localhost', $user, $password, $db);
                        $sql = "SELECT * FROM brodovi";
                        $records = mysqli_query($db, $sql);
                       
                        while ($row = mysqli_fetch_array($records)) {
                            echo "
                            <div id=".$row['ID']." class='card' style='width:350px; height:300px; background-color:rgba(255,255,255,0.6); margin:25px'>
                                <a href='dodatno.php? id=".$row['ID']."'> 
                                <img class='card' src='".$row['link_slika']."' alt='Card image' style='width:300px; margin-left:15px;margin-top:20px'>
                                <h4 style='margin-left:15px'>".$row['model']."</h4>
                            </div>";       
                        }
                        ?>
                    </div>
                </div>
            </table>
        </div>
    </body>
</html>