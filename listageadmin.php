<?php
           echo"Administrateur :";
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'root');
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
            $reponse=$db->query('SELECT * FROM admin');
            while($donnee= $reponse->fetch())
            {
                echo'<p>'. $donnee['username']. ' - '. $donnee['password'] .'<p>';
            }
       
        
    
    ?>