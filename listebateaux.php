<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

   <title>listageBateaux</title>
        </head>
        <body>
           <div class="container">
<h1>liste des bateaux</h1>
<table class="table table-bordered table-hover table-stripped">
    <tr>   <th>ID</th><th>nom</th> <th>vitesse</th>  <th>longueur</th> <th>marins</th> <th>pays d'origine</th>  <th>Actions</th></tr>
    <?php
    define('HOST', 'localhost');
    define('DB_NAME', 'test');
    define('USER', 'root');
    define('PASS', 'root');
    $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
    $query="SELECT *FROM bateaux";
    $result=$db->query($query);
    $data=$result->fetchAll();
    for($i=0;$i<count($data);$i++)
    {
        $id=$data[$i]["id"];
        $nom=$data[$i]["nom"];
        $vitesse=$data[$i]["vitesse"];
        $longueur=$data[$i]["longueur"];
         $equipage=$data[$i]["equipage"];
         $pays=$data[$i]["pays"];
        echo "<tr><td>$id</td> <td>$nom </td> <td>$vitesse km/h </td> <td>$longueur m </td> <td>$equipage marins </td><td>$pays </td> ";
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