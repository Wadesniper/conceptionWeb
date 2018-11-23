<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="style.css" />
             <title>Inscription Armada en tant visiteur</title>
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
                                            <a href="type_inscription.php" class="btn btn-info">S'enregister<span class="sr-only">(current)</span></a>
                                            <a href="login.php" class="btn btn-success">Se connecter</a>
                                        </a>
                                   </div>                                        
                              </nav>

<div class="container">
<form style="margin:50px"method="POST">
    <h1>Inscription en tant que Visiteur</h1>
    <p>Entrez votre prénom</p>
    <input type="text" name="nom">
    <p>Entrez votre nom</p>
    <input type="text" name="prenom">
    <p>Entrez votre date de naissance</p>
    <input type="date" name="date_naissance">
    <p>Entrez votre adresse email</p>
    <input type="email" name="email">
    <p>Entrez votre mot de passe: </p>
    <input type="password" name="password">
    <p> Repetez votre mot de passe: </p>
    <input type="password" name="repeatpassword"><br/><br/>
    <input type="submit" value="s'inscrire" name="submit">
</form>
<?php
    if(isset($_POST['submit'])){
        define('HOST', 'localhost');
        define('DB_NAME', 'bdd_9_1');
        define('USER', 'grp_9_1');
        define('PASS', 'fahKiehoh0');

        try{
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDException $e){
            echo $e;
        }

        //Insertion dans la BDD
        $q= $db->prepare("INSERT INTO users (nom, prenom, date_naissance, email, password)
        VALUES (:nom,:prenom, :date_naissance, :email, :password)");
        $q->execute([
            'nom'=>$_POST['nom'],
            'prenom'=>$_POST['prenom']
            'date_naissance' =>$_POST['date_naissance']
            'email' =>$_POST['email']
            'password' =>$_POST['password']
        ]);
        echo "Inscription réussie. Bienvenue sur le site de l'armada!";
       
    }
?>
</body>
</html>
    </body>
</html>