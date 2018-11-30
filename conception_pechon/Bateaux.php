<?php
session_start();
include_once('includes.php');
   $afficher_bat = $DB->query("SELECT * FROM bateaux");
   $afficher_bat = $afficher_bat->fetchAll();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="style.css" />
        <title>Les Bateaux de l'armada</title>
 
    </head>
    
    <body>  
                       <!-- Navbar de la page -->
                       <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
                                    <a class="navbar-brand" href="#">Armada 2019</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                      <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="programme1.php">Le Programme</a>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="Bateaux.php">Les Bateaux</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">Nous Contacter</a>
                                            </li>
                                            <?php
                                            if($_SESSION['type'] == 'ad'){?>
                                                <li class="nav-item">
                                                <a class="nav-link" href="gestion_inscrits.php">Gestion des inscrits</a>
                                                </li>
                                            <?php } ?> 
                                            <?php
                                           if($_SESSION['type'] == 'rb'){?>
                                            <li class="nav-item">
                                            <a class="nav-link" href="gestion_bateau.php">Gérer votre Bateau</a>
                                            </li>
                                        <?php } ?>    
                                        </ul>
                                        <?php
                                        if(isset($_SESSION['type'])){
                                        ?>  
                                            <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
                                        <?php
                                        }else{
                                        ?>    
                                            <div class="btn-group">
                                            <a href="register.php" class="btn btn-info">S'enregister</a> 
                                            <a href="login.php" class="btn btn-success">Se connecter</a> 
                                            </div> 
                                        <?php
                                        }
                                        ?>
                                                                           
                              </nav>
        <div class="row">
                <?php
                foreach($afficher_bat as $ab){
                ?>
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="<?= $ab['img_url']?>" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title"><?= $ab['nom']?></h5>
                                  <p class="card-text"><?= $ab['pays']?></p>
                                  <p class="card-text"><?= $ab['type']?></p>
                                  <p class="card-text"><?= $ab['descp']?></p>
                                  <?php if(isset($_SESSION['type'])){?>
                                  <a href="<?= $ab['pdf_url']?>" class="btn btn-success">Télécharger le PDF</a>
                                  <?php } else{ ?>
                                  <a href="register.php" class="btn btn-info">S'inscrire pour voir plus d'info</a>
                                  <?php } ?>
                                </div>
                        </div>
               </div>
               <br/>
                <?php } ?>
         </div>          
        
    </body>
</html>