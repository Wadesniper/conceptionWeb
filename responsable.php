<!DOCTYPE html>

<html>
           <head>
           <meta charset="utf-8" />
           <title> Login</title>
          </head>
<body>
    <div class="container">
           <img src="zer.png"/>

      <form method="POST">
      <div class="form-input">
        <input type="text" name="username" id="username" placeholder="Enter the User Name"/> 
      </div>
      <div class="form-input">
        <input type="password" name="password" id="password" placeholder="password"/>
     </div>
        <input type="submit" type="submit" value="LOGIN" name="login" class="btn-login"/>
    </form>
  </div>



</body>
</html>
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

        $q=$db->prepare("SELECT * FROM responsable WHERE username = :username ");
        $q->execute(['username'=>$username]);
        $result=$q->fetch();
        if($result==true)
        {
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