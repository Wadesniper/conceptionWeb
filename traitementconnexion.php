<?php
 
 if(isset($_POST['login']))
 {
     extract ($_POST);
     if(!empty($username) && !empty($password))
     {
        define('HOST', 'localhost');
        define('DB_NAME', 'phplogin');
        define('USER', 'root');
        define('PASS', 'root');

        $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $q=$db->prepare("SELECT * FROM visiteur WHERE username = :username ");
        $q->execute(['username'=>$username]);
        $result=$q->fetch();
        if($result==true)
        {
            
            header('Location:membre.php');
           // if(password_verify($password,$result['password']))
         //   {
                
          //      header('Location:login.php');
          //  }else{
           //     echo" mot de passe incorrecte";
           // }
        }
        else
        {
            echo "le compte au nom de : ".$username. " n'existe pas";
        }
     }
     else
     {
        echo "veuillez completer tous les champs ";
     }
 }
 ?>