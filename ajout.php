
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <?php
        include('Menu.php');
    ?>

</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
               <h2> Ajouter Etudiant</h2>
            </div>
            <div class="card-body">
                <form action="inserer.php" method="post" class="col-lg-4">
                    <div class="form-group">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="genre">genre</label>
                    <input type="text" name="genre" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="date">date</label>
                    <input type="date" name="datenaiss" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="nationalite">Nationalite</label>
                    <input type="text" name="nationalite" class="form-control"> 
                    </div>
                    <div class="form-group">
                    <label for="classe">Classe</label>
                    <input type="text" name="classe" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Ajouter</button>
                    </div>
            </form>
            </div>
        </div>
    </div>
    
</body>
    <footer style="height:85px;">
            <?php
                include('footter.php');
            ?>
    </footer>
</html>