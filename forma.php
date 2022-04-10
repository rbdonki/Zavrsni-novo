<?php
    $user = 'root';
    $password = '';
    $db = 'Brodovi';
    $db = new mysqli('localhost', $user, $password, $db);
    $sql = "insert into bookiranje(ImePrezime,Email,Mobitel,Od,Do) values ('".$_POST['ImePrezime']."','".$_POST['Email']."','".$_POST['Mobitel']."','".$_POST['Od']."','".$_POST['Do']."')";
    $records=mysqli_query($db,$sql);
    header("refresh:2;url=Pocetna.php");
?>