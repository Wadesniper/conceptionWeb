<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

   <title>formulaire responsable </title>
        </head>
        <body>
        <div class="container">
<form method="POST" action="membreresponsable.php">

<div class="form-group">
    <label > <p> nom du navire:</p></label>
    <input type="text" id="nom" name="nom" class="form-control">
</div>

    <label for="vitesse"></label>
    <p>saisir vitesse: </p>
    <input type="number" id="vitesse" name="vitesse" class="form-control">

    <label for="longueur"></label>
    <p> saisir longueur: </p>
    <input type="number" id="longueur" name="longueur" class="form-control"><br/><br/>
    <p> le nombre de marrins: </p>
    <input type="number" id="equipage" name="equipage" class="form-control"><br/><br/>
    <p> le pays d'origine: </p>
    <input type="text" id="pays" name="pays" class="form-control"><br/><br/>
    <!-- <p> saisir le jour d'arrivée: </p>
    <input type="date" id="arrive" name="arrive" class="form-control"><br/><br/>
    <p> saisir le jour de départ: </p>
    <p>
    <input type="date" id="depart" name="depart" class="form-control"/><br/><br/>
</p> -->
    <input type="submit" value="AJOUTER" name="submit" class="btn btn-primary">
    <br/>
    <a href="listebateaux.php"><h3>Voir la liste des bateaux</h3></a>
    <br/>
    <a href="teleimage.php"><h3>Telecharger une image</h3></a>
   
    
</form>
</div>
 </body>
        </html>
   <?php
    if(isset($_POST['submit'])){
        define('HOST', 'localhost');
        define('DB_NAME', 'test');
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
        $q= $db->prepare("INSERT INTO bateaux (nom, vitesse,longueur,equipage,pays)
        VALUES (:nom, :vitesse,:longueur)");
        $q->execute([
            'nom'=>$_POST['nom'],
            'vitesse'=> $_POST['vitesse'],
            'longueur'=> $_POST['longueur'],
             'equipage'=> $_POST['equipage'],
             'pays'=> $_POST['pays']
        ]);
        echo "Inscription réussie. ";
       
    }
?>
       
