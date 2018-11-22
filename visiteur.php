<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <title>visiteur</title>
    </head>
<body>
             <div class="container">
      <form  method="POST">
      <img src="logi.jpg" />
      <br/>
      <div class="form-group">
        <input type="text" name="username" id="username" placeholder="Your Name" class="form-control"/> 
      </div>
      <div class="form-group">
        <input type="password" name="password" id="password" placeholder="Your password" class="form-control"/>
     </div>
        <input type="submit" type="submit" value="LOGIN" name="login" class="btn btn-primary" />
    </form>
  </div>

 <?php include 'traitementconnexion.php' ; ?>

</body>
</html>