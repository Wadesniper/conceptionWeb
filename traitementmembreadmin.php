<?php

//ouverture d'une connexion à la base de donnée
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'root');
        $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
//preparation de la requete sql
$q= $db->prepare("INSERT INTO visiteur (username, password)
VALUES (NULL, :username, :password)");

//on lie chaque marqueur a une valeur
 //$q->bindValue(':username',$_POST['username'], PDO::PARAM_STR);
//$q->bindValue(':password',$_POST['password'], PDO::PARAM_STR);

//execution de la requete preparée
  $q->execute([
    'username'=>$_POST['username'],
    'password'=>htmlspecialchars( $_POST['password'])
]);
 

    echo "l'utilisateur a ete ajoute dans la bdd !!! ";
 
?>