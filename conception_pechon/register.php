<?php
session_start();
include_once('includes.php');
if (isset($_SESSION['id'])){
    echo "Vous êtes déjà inscrit";
    exit;
}
if(!empty($_POST)){
    extract($_POST);
    $valid = true;
    $nom = htmlspecialchars(trim($nom));
    $prenom = htmlspecialchars(trim($prenom));
    $email = trim($email);
    $password = htmlspecialchars(trim($password));

    if(empty($prenom)){
        $valid = false;
        $error_prenom = "Veuillez renseigner votre prenom";
    }
    if(empty($nom)){
        $valid = false;
        $error_nom = "Veuillez renseigner votre nom";
    }
    
    if(empty($pays)){
        $valid = false;
        $error_pays = "Veuillez sélectionner un pays";
    }
    if(empty($email)){
        $valid = false;
        $error_email = "Veuillez renseigner votre email";
    }else{
        // On vérifit que le mail est disponible
        $req_mail = $DB->query("SELECT email FROM users WHERE email = ?",
            array($email));

        $req_mail = $req_mail->fetch();

        if ($req_mail['email'] <> ""){
            $valid = false;
            $error_email = "Ce mail existe déjà";
            }
        }
    if(empty($password)){
        $valid = false;
        $error_password = "Veuillez renseigner un mot de passe";
    }
    if(empty($repeatpassword)){
        $valid = false;
        $error_rpassword = "Veuillez renseigner un mot de passe";
    }
    if(!empty($password) && !empty($repeatpassword)){
        if($password != $repeatpassword){
        $valid = false;
        $error_rpassword = "les mots de passes ne sont pas identiques";
        }
    }
    if($valid){
        $type = "vi";
        // On insert nos données dans la table utilisateur
        $DB->insert("INSERT INTO users (prenom, nom, pays, email, password, type) VALUES 
            (?, ?, ?, ?, ?, ?)", 
            array($prenom, $nom, $pays, $email, $password, $type));

        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="fr-FR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="style.css" />
             <title>Inscription au site armada</title>
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
                                            <a href="register.php" class="btn btn-info">S'enregister<span class="sr-only">(current)</span></a>
                                            <a href="login.php" class="btn btn-success">Se connecter</a>
                                        </a>
                                   </div>                                        
                              </nav>

           <div class="container">
                <form style="margin:50px" method="POST" action="register.php">
                     <h1>Inscription</h1>
                        <?php 
                           if(isset($error_prenom)){
                               echo $error_prenom;
                           }
                        ?>
                        <input type="text" name="prenom" placeholder="Votre Prénom" required="required">
                        <?php 
                           if(isset($error_nom)){
                               echo $error_nom;
                           }
                        ?>
                        <input type="text" name="nom" placeholder="Votre Nom" required="required">
                        <?php 
                           if(isset($error_pays)){
                               echo $error_pays;
                           }
                        ?>
                        <select name="pays" required="required">
                          <option value="France">France</option>
                          <option value="Angleterre">Angleterre</option>
                          <option value="Etat-Unis">Etat-Unis</option>
                          <option value="Russie">Russie</option>
                        </select>
                        <?php 
                           if(isset($error_email)){
                               echo $error_email;
                           }
                        ?>
                        <input type="email" name="email" placeholder="Votre Adresse Email" required="required">
                        <?php 
                           if(isset($error_password)){
                               echo $error_password;
                           }
                        ?>
                        <input type="password" name="password" placeholder="Votre mot de passe" required="required">
                        <?php 
                           if(isset($error_rpassword)){
                               echo $error_rpassword;
                           }
                        ?>
                        <input type="password" name="repeatpassword" placeholder="repetez Mot de Passe" required="required">
                        <br/><br/>
                        <input type="submit" value="S'inscrire" name="submit">
                </form>
           </div>
    </body>
</html>
