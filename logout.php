<?php
session_start();
include_once('includes_php')

?>
<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="styleindex.css" />
             <title>L'ARMADA 2019 à Rouen by Groupe 9_1</title>
    </head>
    
    <body>
<h1>l'email est <?php echo $_SESSION['email']; ?></h1>
     </body>
</html>