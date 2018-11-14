<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form method="POST">
    <p>Votre pseudo: </p>
    <input type="text" name="username">
    <p>Votre password: </p>
    <input type="password" name="password">
    <p> Repetez Votre password: </p>
    <input type="password" name="repeatpassword"><br/><br/>
    <input type="submit" value="s'inscrire" name="submit">
    <a href="connexion.php" > Se connecter </a>
</form>
<?php
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
       
    }
    
/*
if(isset($_POST['submit']))
{   
    $host='localhost';
    $bdd='phplogin';
    $user='root'; // 'root' pendant le développement, selon votre projet pour le serveur de l'école:w
    $pass='root'; // 'root' pour MAMP, '' pour EasyPHP, selon votre projet pour le serveur de l'école

    $mysqli = new mysqli($host, $user, $pass, $bdd);
    if ($mysqli->connect_errno) {
        echo "Echec lors de la connexion à MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    
    $stmt = mysqli_prepare($mysqli, "INSERT INTO 'users' ('username', 'password') VALUES (?,?)");
       
    $username = $_POST['username'];
    $password = $_POST['password'];

    //Lecture des marqueurs
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
             
    
    // Exécution de la requête de creation de compte 
    $c = mysqli_stmt_execute($stmt);
    echo "fuck";
}
*/
?>
</body>
</html>