<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="index.php">administrateurs<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="eleve.php" id="navbarDropdown"s data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         ELeve</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ajout.php">Ajouter</a>
          <a class="dropdown-item" href="modifiereleve.php">Modifier</a>
          <a class="dropdown-item" href="#">Supprimer</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="classe.php" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Classe
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"></a>
          <a class="dropdown-item" href="ajoutclasse.php">Ajouter</a>
          <a class="dropdown-item" href="modificationclasse.php">Modifier</a>
          <a class="dropdown-item" href="#">Supprimer</a>
        </div>
      </li>
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</body>
</html>