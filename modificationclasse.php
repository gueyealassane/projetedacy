

 <?php
    include("connexion.php");
 ?>

<!DOCTYPE <!DOCTYPE html>
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
        include("Menu.php");
    ?>
</head>
<body>
       <form action="#" method="post">
       <div class="row" style="margin-left:100px;margin-top:45px;">
                        <div class="col-lg-3" class="form-control">
                         Id:
                        <input type="text" name="id" id="id" class="form-control" placeholder="faites les recherches ça marche">
                        </div>
                        <div class="col-lg-3" class="form-control">
                         Nom:
                        <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                       
                        <div class="col-lg-3" class="form-control">

                            <button type="submit" name="submit1" class="btn btn-primary btn-block" style="margin-top:22px;">
                             Recherche
                            </button>
                        </div>

                      
      </div>
       
       </form>
            
                       <?php
                            
                        
                                $sql9 = "select id,nom,effectif from classe
                                             where id= ? or nom = ?;";
                                $reponse9 = $bdd->prepare($sql9);
                                $reponse9->execute(array($_POST['id'],$_POST['nom']));
                            
                                while($donnees9 = $reponse9->fetch())
                                {
                                 
                        ?>
                       
        
                       <div class="container">
            <div class="card mt-5">
                <div class="card-header">
                    <h2>Modification  Etudiant</h2>
                </div>
                    
                
                <div class="card-body" style>

                <form method="post" action="update.php" class="col-lg-4">
                        <div class="form-group">
                            <label for="nom">Id</label>
                            <input type="number" name="id" id="id" class="form-control" value="<?php echo $donnees9['id'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $donnees9['nom'];?>">
                        </div>
                        <div class="form-group">
                            <label for="effectif">Effecif</label>
                            <input type="text" name="effectif" id="effectif" class="form-control" value="<?php echo $donnees9['effectif'];?>">
                        </div>
                        
                        <?php
                            }
                        
                          ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Modifier</button>
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </div>
                    </form>
                </div>
            
            </div>

            
        </div>
      
      
    
</body>
        
                            <footer style="margin-top:100px; height:95px;">
                                 <?php
                                 include('footter.php');
                                ?>
                            </footer>
        
</html>