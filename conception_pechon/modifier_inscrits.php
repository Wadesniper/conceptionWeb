<?php
session_start();
include_once('includes.php');
    if ($_SESSION['type'] != 'ad' || !isset($_SESSION['type'])){
        header('Location: index.php');
        exit;
    }
    $id = htmlentities(trim($_GET['users_id']));
    $afficher_user = $DB->query("SELECT * FROM users WHERE users_id = ?", array($id));
    $afficher_user = $afficher_user->fetch();
    
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        $type = trim($type);
        $DB->insert("UPDATE users SET type = ? WHERE users_id = ?", 
        array($type, $id)); 
        header('Location: gestion_inscrits.php');
        exit;  
    }    
?>
<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="styleindex.css" />
             <title>Modification utilisateur</title>
    </head>
    
    <body> <!-- Navbar de la page -->
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
                                                <li class="nav-item active">
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
                <h2>Modification de l'utilisateur <?= $afficher_user['users_id'] ?></h2>
                <form method="POST">
                <div>Le prénom : <?= $afficher_user['prenom'] ?></div>
                <div>Le nom : <?= $afficher_user['nom'] ?></div>
                <div>L'email : <?= $afficher_user['email'] ?></div>
                <div>Le pays : <?= $afficher_user['pays'] ?></div>
                <select name="type">
                   <option value="vi">Visiteur</option>
                   <option value="rb">Responsable Bateau</option>
                   <option value="ad">Administrateur</option>
                </select>
                <input type="submit" value="modifier" name="submit">
                </form>
                    </body>
            </html> 