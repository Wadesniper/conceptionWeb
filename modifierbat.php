<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>modifier</title>
    </head>
    
 <body>
 <div class="container">
<form method="POST" action="modif.php">

   <div class="form-group">
    <p>nom du navire: </p>
    <input type="text" id="nom" name="nom" class="form-control">

    <label for="vitesse"></label>
    <p>saisir vitesse: </p>
    <input type="number" id="vitesse" name="vitesse" class="form-control">

    <label for="longueur"></label>
    <p> saisir longueur: </p>
    <input type="number"id="longueur" name="longueur" class="form-control"><br/><br/>
    <p> saisir id: </p>
    <input type="number"id="id" name="id"><br/><br/>

    
    <input type="submit" value="Enregistrer" name="submit">

    </form>

</div>
</div>
 </body>
 </html>