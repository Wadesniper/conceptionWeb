<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="styleindex.css" />
             <title>Type inscription Armada</title>
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
                            <a class="nav-link" href="index.html">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Le Plan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Les Bateaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <a href="all_register.php" class="btn btn-info">S'enregister</a>
                        <a href="#" class="btn btn-success">Se connecter</a>
                    </a>
               </div>                                        
          </nav>
<form method="POST">
    <p>Vous êtes un : <p>
    Visiteur <input type="radio" name="visiteur"> 
    Responsable Bateau <input type="radio" name="respbateau">
    Administrateur <input type="radio" name="admin">
</form>

<?php
/*
    if(isset($_POST['visiteur'])){ 
    <form method="POST">
    <p>Votre pseudo: </p>
    <input type="text" name="username">
    <p>Votre Mot de Passe: </p>
    <input type="password" name="password">
    <p> Repetez Votre Mot de Passe: </p>
    <input type="password" name="repeatpassword"><br/><br/>
    <input type="submit" value="s'inscrire" name="submit">
    <a href="connexion.php" >Se connecter </a>    
} */
?>


<?php
/*
    if(isset($_POST['submit'])){
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'wade5555');

        try{
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDException $e){
            echo $e;
        }

        //Insertion dans la BDD
        $q= $db->prepare("INSERT INTO users (username, password)
        VALUES (:username, :password)");
        $q->execute([
            'username'=>$_POST['username'],
            'password'=>$_POST['password']
        ]);
        echo "Inscription réussie. Bienvenu!";
       
    } */
?>
</body>
</html>