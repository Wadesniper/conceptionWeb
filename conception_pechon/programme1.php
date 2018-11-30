<?php session_start();
include_once('includes.php');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>Programme Armada 2019</title>     
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
                                            <li class="nav-item active">
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
<p>
<h1>5 JUIN</h1>
En ouverture et en avant-première de l’Armada, la Seine s’anime … C’est la Grande pagaille. Les équipes doivent construire leur embarcation et tentent de traverser la Seine sans couler à bord de leur OFNI : Objet Flottant Non Identifié. Assistez au lancement de la 7e édition de l’Armada en découvrant cette folle traversée riche en émotion, où les équipages rivalisent d’imagination et d’originalité. En clôture de cette journée, ne manquez pas la levée du Pont Flaubert, le soir entre 21h et minuit.
<br/><br/>
<h1>6 JUIN</h1>
De nouveau le Pont Flaubert se lève entre 5h et 6h du matin. Les voilà ! C’est l’arrivée des navires ! Assistez à cette remontée de la Seine des plus beaux voiliers du monde. Saluez les marins venus de tous les horizons qui débarquent à Rouen, sur les quais, dans la ville. Pour les plus tardifs, la levée du pont Flaubert est également prévue le soir entre 21h et minuit. Tir d’un feu d’artifice vers 22h30
<h1>7 JUIN</h1>
Soyez matinaux ! Le Pont Flaubert se lève entre 5h et 6h, une occasion de se promener sur les quais au petit matin ou alors il faut veiller tard car il se lève à nouveau entre 21h et minuit. Cette journée accueille le congrès du Mérite maritime, et en soirée les concerts organisés par la Région Normandie et le magnifique feu d’artifice entre 23h et 23h30. Congrès du Mérite Maritime Tir d’un feu d’artifice vers 23h00
</p>
<a href="programme2.php">voir les autres dates</a>
</body>
</html>