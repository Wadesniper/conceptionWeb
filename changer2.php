<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet"  href="sty.css" />
</head>
<body>
<title>Ajouter utilisateur</title>
<div class="container-fluid" style="margin:px ;">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
<form method="POST" style=margin:50px >
    <p> Nom: </p>
    <input type="text" name="username">
    <p> Mot de passe: </p>
    <input type="password" name="password">
    <br/>
    
    <input type="submit" value="Ajouter en tant qu'admin " name="submit">
    <br/>
</form>

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

        //Insertion dans la BDD dans la table admin
        $q= $db->prepare("INSERT INTO admin (username, password)
        VALUES (:username, :password)");
        $q->execute([
            'username'=>$_POST['username'],
            'password'=>htmlspecialchars( $_POST['password'])
        ]);
        echo "Ajout bien enregistrer !";
       
    }
?>

