<?php
    session_start();
    include_once('includes.php'); // Fichier PHP contenant la connexion à votre BDD
    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        $email = htmlspecialchars(trim($email));
        $password = trim($password);

    if(empty($email)){
        $valid = false;
        $error_email = "Veuillez renseigner votre email";
    }
    
    if(empty($password)){
        $valid = false;
        $error_password = "Veuillez renseigner un mot de passe";
    }
    $req = $DB->query('Select * from users where email = ? and password = ?', array ($email, $password));
    $req = $req->fetch();
    
    if(!$req['email']){
        $valid = false;
        $error_compt = "Votre pseudo ou mot de passe ne correspondent pas";
    }   
    
    if($valid){
        $_SESSION['email'] = $req['email'];
        $_SESSION['type'] = $req['type'];
        $_SESSION['users_id'] = $req['users_id'];
        header('Location: index.php');
        exit;
    }
}
    ?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <title>Connexion</title>
    </head>

    <body>       <!-- Navbar de la page -->
                              <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
                                    <a class="navbar-brand" href="#">Armada 2019</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                      <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.php">Accueil</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="process.html">Le Programme</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Bateaux.php">Les Bateaux</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                        <div class="btn-group">
                                            <a href="register.php" class="btn btn-info">S'enregister</a>
                                            <a href="login.php" class="btn btn-success">Se connecter<span class="sr-only">(current)</span></a>
                                   </div>                                        
                              </nav>
        <h1>Se connecter</h1>
        <form method="post">
            <?php
                if (isset($error_email)){
            ?>
                <div><?= $error_email ?></div>
            <?php   
                }
            ?>
            <input type="email" placeholder="Adresse mail" name="email" required>
            <?php
                if (isset($error_password)){
            ?>
                <div><?= $error_password ?></div>
            <?php   
                }
            ?>
            <input type="password" placeholder="Mot de passe" name="password" required>
            <?php
                if (isset($error_compt)){
            ?>
                <div><?= $error_compt ?></div>
            <?php   
                }
            ?>
            <button type="submit" name="connexion">Se connecter</button>

        </form>
    </body>
</html>