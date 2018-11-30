<?php 
  session_start();
  include_once('includes.php');
  if ($_SESSION['type'] != 'rb' || !isset($_SESSION['type'])){
    header('Location: index.php');
    exit;
  }
  $rch_bat = $DB->query("SELECT * FROM bateaux WHERE bat_id_user = ?", array($_SESSION['users_id']));
  $rch_bat = $rch_bat->fetch();
?>
<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="styleindex.css" />
             <title>Gestion bateau armada 2019</title>
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
                                            <li class="nav-item">
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
                                            <li class="nav-item active">
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
            
                    <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="<?= $rch_bat['img_url']?>" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Nom : <?= $rch_bat['nom']?></h5>
                                  <p class="card-text">Pays : <?= $rch_bat['pays']?></p>
                                  <p class="card-text">Type : <?= $rch_bat['type']?></p>
                                  <p class="card-text">Description rapide : <?= $rch_bat['descp']?></p>
                                  <a href="<?= $rch_bat['pdf_url']?>" class="btn btn-success">Télécharger le PDF</a>
                                </div>
                        </div>
                    </div>
            <h1>Choisissez votre action</h1>
            <?php if(empty($rch_bat)){?>
            <a href="ajouter_bateau.php" class="btn btn-success">Ajouter votre bateau</a>
            <?php } ?>
            <a href="modifier_bateau.php" class="btn btn-warning">Modifier votre bateau</a>
            <a href="supprimer_bateau.php" class="btn btn-danger">Supprimer votre bateau</a>
        </body>
    </html>