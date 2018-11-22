<?php
    
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'root');

        try{
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }
        catch(PDException $e)
        {
            echo "failed!" .$e->getMessage();
        }

        //Insertion dans la BDD
       // $q= $db->prepare("INSERT INTO visiteur (username, password)
       // VALUES (:username, :password)");
      //  $q->execute([
       //     'username'=>$_POST['username'],
       //     'password'=>htmlspecialchars( $_POST['password'])
       // ]);
       
       
    
?>