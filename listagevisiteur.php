<!-- <?php
        //    echo"visiteurs :";
        // define('HOST', 'localhost');
        // define('DB_NAME', 'phplogin');
        // define('USER', 'root');
        // define('PASS', 'root');
        //     $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
        //     $reponse=$db->query('SELECT * FROM visiteur');
        //     while($donnee= $reponse->fetch())
        //     {
        //         echo'<p>'. $donnee['username']. ' - '. $donnee['password'] .'<p>';
        //     }
     
    ?> -->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

   <title>les responsables</title>
        </head>
        <body>
           <div class="container">
<h1>les visiteurs inscrits au site</h1>
<table class="table table-bordered table-hover table-stripped">
    <tr> <th>id</th> <th>nom</th><th>prenom</th> <th>mot de passe</th>  <th>adresse mail</th>  <th>Actions</th></tr>
    <?php
    define('HOST', 'localhost');
    define('DB_NAME', 'phplogin');
    define('USER', 'root');
    define('PASS', 'root');
    $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
    $query="SELECT *FROM visiteur";
    $result=$db->query($query);
    $data=$result->fetchAll();
    for($i=0;$i<count($data);$i++)
    {
        $id=$data[$i]["id"];
        $username=$data[$i]["username"];
        $prenom=$data[$i]["prenom"];
        $password=$data[$i]["password"];
        $mail=$data[$i]["mail"];
       // $longueur=$data[$i]["longueur"];
        // $arrive=$data[$i]["arrive"];
        // $depart=$data[$i]["depart"];
        echo "<tr> <td>$id</td><td>$username</td> <td>$prenom </td><td>$password </td> <td>$mail  </td>   ";
        echo "<td>";
        echo "<a href='supprimerbat.php ?id=$id' onclick = 'return confirm(\"etes vous sur de vouloir supprimer?\");' class='btn btn-danger'>Supprimer</a>";
        echo "<a href='modifierbat.php ?id=$id' class='btn btn-warning'> Modifier</a>";
        echo "</tr>";
    }
    ?>
    
</table>


         </div>
        </body>
    </html>