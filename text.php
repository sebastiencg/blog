<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article</title>
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
<div class="container">
    <form action="envoie.php" method="post">
        <div class="mb-3">
            <label for="titre" class="form-label">titre</label>
            <input type="text" class="form-control" id="titre" name="titre" placeholder="titre" style="background-color: lightgray">
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">article</label>
            <textarea class="form-control" id="contenu" name="contenu" rows="3" style="background-color: lightgray" ></textarea>
        </div>
        <div class="mb-3">
            <button class="btn btn-primary" type="submit" name="envoyer" > envoyer</button>
        </div>
    </form>
</div>
</body>
</html>