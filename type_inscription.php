<!DOCTYPE html>
<html lang="fr-FR">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
             <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
             <link rel="stylesheet" href="style.css" />
             <title>Inscription au site armada</title>
    </head>
    
    <body class="fond">
        <!-- Navbar de la page -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
                <a class="navbar-brand" href="#">Armada 2019</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="process.html">Le Programme</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Bateau.php">Les Bateaux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <div class="btn-group">
                        <a href="type_inscription.php" class="btn btn-info">S'enregister</a>
                        <a href="login.php" class="btn btn-success">Se connecter</a>
                    </a>
               </div>                                        
          </nav>
          <div id="conteneur">
              <a href="register_visiteur.php" class="btn-info btn-lg configbouton">Visiteur</a>
              <a href="register_respbateau.php" class="btn-info btn-lg configbouton">Responsable Bateau</a>
              <a href="register_administateur.php" class="btn-info btn-lg configbouton">Administateur</a>
          </div> 
    </body>
</html>