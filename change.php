<?php
$envoyer = $_POST['envoyer'];
$titre = htmlspecialchars($_POST['titre']);
$contenu= htmlspecialchars($_POST['contenu']);
$id=htmlspecialchars($_POST['id']);
$username="guy";
$password="EOfiszH7PFLb9(n!";
$servername="localhost";
$dbname="blog";
//--------------------------------------------
if(!empty($titre)&&!empty($contenu)){
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password, [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ]);
    $sql = "UPDATE `article` SET `titre`= :titre,`contenu`= :contenu WHERE id='$id';";
    $request = $conn->prepare($sql);
    $request->execute([
        "titre"=>$titre,
        "contenu"=>$contenu
    ]);

    header('location:index.php');
}
else{
    echo "<h1>erreur</h1>";
}
//--------------------------------------------
?>