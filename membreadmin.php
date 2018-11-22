<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="styleZ.css" />
</head>
<body>
<title>Ajouter utilisateur</title>

<div class="container-fluid" style="margin:px ;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
<form method="POST" style=margin:50px >
    <p> Nom: </p>
    <input type="text" name="username" class="form-control"/>
    <p> Mot de passe: </p>
    <input type="password" name="password" class="form-control"/>
    <br/>
    
    <input type="submit" value="Ajouter utilisateur" name="submit"/>
    <br/>
</form>
<form method="POST" style=margin:50px >
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <p> lister les utilisateurs </p> </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="listagevisiteur.php">visiteur</a>
                                <a class="dropdown-item" href="listageresponsable.php">responsable bateau</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="listageadmin.php">admin</a>
                              </div>
                    
 </form>
 <form>
 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <p> changer le role d'un utilisateur </p> </a>
                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="changer1.php">en responsable bateau</a>
                                <a class="dropdown-item" href="changer2.php">en administrateur</a>
  </form>
                              <br/>

                             

   
</nav>
</div>

</body>
</html>

<?php
    if(isset($_POST['submit'])){
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'root');

        try{
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDException $e){
            echo $e;
        }

        //Insertion dans la BDD
        $q= $db->prepare("INSERT INTO visiteur (username, password)
        VALUES (:username, :password)");
        $q->execute([
            'username'=>$_POST['username'],
            'password'=>htmlspecialchars( $_POST['password'])
        ]);
        echo "Ajout bien enregistrer !";
       
    }
?>
</body>
</html>
