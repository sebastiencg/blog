<?php
$username="guy";
$password="EOfiszH7PFLb9(n!";
$servername="localhost";
$dbname="blog";

$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$sql="SELECT * FROM `article`";
$query=$conn->query($sql);
$reponses= $query->fetchAll();

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container mt-3">
    <ul class="nav justify-content-end">
        <li class="nav-item" style=" background-color: aqua ; border-radius: 20px">
            <a class="nav-link active" aria-current="page" href="index.php">article</a>
        </li>
        <li class="nav-item" style=" background-color: aqua ; border-radius: 20px">
            <a class="nav-link" href="text.php">redaction</a>
        </li>
        <li class="nav-item" style=" background-color: aqua ; border-radius: 20px">
            <a class="nav-link" href="modif.php">modifier</a>
        </li>
        <li class="nav-item" style=" background-color: aqua ; border-radius: 20px">
            <a class="nav-link" href="supprimer.php">supprimer</a>
        </li>
    </ul>
</div>
<div class="post mt-3 container">
    <?php foreach ($reponses as $reponse) : ?>
        <div class="post mt-3">
            <h3><?= $reponse["titre"] ?></h3>
            <p><?= $reponse["contenu"] ?></p>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>
