<?php
$titre = htmlspecialchars($_POST['titre']);
$username="guy";
$password="EOfiszH7PFLb9(n!";
$servername="localhost";
$dbname="blog";
//--------------------------------------------
if(!empty($titre)){
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password, [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    $sql="DELETE FROM `article` WHERE titre='$titre';";

    $query=$conn->query($sql);

    header('location:index.php');
}
else{
    echo "<h1>erreur</h1>";
}
//--------------------------------------------
?>