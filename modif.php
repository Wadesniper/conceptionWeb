<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
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
    $q= $db->prepare("UPDATE bateaux SET nom =:nom, vitesse= :vitesse, longueur= :longueur WHERE id= :id");
    // $q= $db->prepare("UPDATE bateaux SET vitesse VALUES (:vitesse) WHERE id= :id");
    // $q= $db->prepare("UPDATE bateaux SET longueur VALUES (:longueur) WHERE id= :id");
    $q->execute([
        'id'=>$_POST['id'],
        'nom'=>$_POST['nom'],
        'vitesse'=> $_POST['vitesse'],
        'longueur'=>$_POST['longueur']
    ]);
    echo "Inscription réussie. B";
}
?>
</body>
 </html>