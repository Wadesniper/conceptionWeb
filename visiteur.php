
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
   
    <input type="submit" value="s'inscrire" name="submit">
    <a href="connexion.php" > Se connecter </a>
</form>

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
        $q= $db->prepare("INSERT INTO users (username, password)
        VALUES (:username, :password)");
        $q->execute([
            'username'=>$_POST['username'],
            'password'=>$_POST['password']
        ]);
        echo "Inscription réussie. Bienvenu!";
       
    }
    
?>
</body>
</html>
 
<?php
session_start();
if ($_SESSION['username'] )// si il n'est pas loguer impossible d'acceder à l'espace membre
{
    echo"bienvenue".$_SESSION['username'];
    header('Location:membrevisiteur.php');
    
}else header('Location:visiteur.php');

?>