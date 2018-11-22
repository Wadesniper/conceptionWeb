<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
   <title>formulaire d'inscription</title>
        </head>
        <body>
           <div class="container">
<h1>liste des bateaux</h1>
<table class="table table-bordered table-hover table-stripped">
    <tr>   <th>ID</th><th>nom</th> <th>vitesse</th>  <th>longueur</th>  </tr>
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
        // $arrive=$data[$i]["arrive"];
        // $depart=$data[$i]["depart"];
        echo "<tr><td>$id</td> <td>$nom </td> <td>$vitesse km/h </td> <td>$longueur m </td>  ";
        echo "<td>";
       // echo "<a href='supprimerbat.php ?id=$id' onclick = 'return confirm(\"etes vous sur de vouloir supprimer?\");' class='btn btn-danger'>Supprimer</a>";
       // echo "<a href='modifierbat.php ?id=$id' class='btn btn-warning'> Modifier</a>";
        echo "</tr>";
    }
    ?>
    
</table>


         </div>
        </body>
    </html>
    <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      
 
    </head>
    
    <body>
        
            <div class="row">
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="americo.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Amerigo </h5>
                                  <p class="card-text">L’Amerigo Vespucci est un voilier-école italien. Il appartient à la Marina militare, la marine militaire italienne, utilisé à la formation des élèves officiers. Il est actuellement l'un des plus anciens trois-mâts carré à naviguer, le plus ancien navire-école de la marine italienne en service et un des plus grands voiliers école militaire du monde.

Le voilier porte le nom du célèbre navigateur italien Amerigo Vespucci. Il est basé à Gênes.</p>
                                
                                </div>
                        
                       </div>
               </div>

        <br/>
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="kruzen.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">kruzenshten</h5>
                                  <p class="card-text">Ce grand voilier de fabrication allemande, fut construit en 1926, pour le transport de matériaux de construction vers le Chili.  Il s’appelait alors «  Padua » (du nom de la ville de Padoue en Italie). Donné en 1946 à l’ex-URSS au titre des dommages de guerre, ce quatre-mâts barque y reçut le nom de Kruzensthern, en l’hommage du baron de Kruzensthern, amiral de la flotte impériale russe au début du XIXe siècle.</p>
                                  
                                </div>
                        
                         </div>
                </div>

                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="galeon.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">EL Galeon</h5>
                                  <p class="card-text">El Galeón ou Galeón Andalucía est la réplique d'un galion espagnol du XVIe siècle conçu et construit par Ignacio Fernández Vial. Il a été parrainé et construit par la Junte d'Andalousie et la Fondation Nao Victoria avec les objectifs de promouvoir le projet Guadalquivir Rio de Historia et de rester à côté du pavillon espagnol pendant l'Exposition universelle de 2010 à Shanghai et devenir ambassadeur de la Communauté Autonome d'Andalousie.

En outre, son voyage a servi à signer des accords avec plusieurs universités andalouses, avec celle de Barcelone et avec celle de Liverpool, pour effectuer diverses études. Il a également reçu le prix Grand Voilier de la Fédération Espagnole de Voile.</p>
                                 
                                </div>
                        
                         </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="belem.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Belem</h5>
                                  <p class="card-text">Le Belem est le nom d'un port du Brésil. Il est le dernier trois-mâts barque français en état de navigation, classé au titre des monuments historiques en 1984.

Construit à Nantes, utilisé notamment dans les Antilles, puis tour à tour anglais, italien puis à nouveau français, cet ancien voilier de charge, plusieurs fois transformé, motorisé et rebaptisé, pour divers usages. La fondation Belem, en hérite en 1980.</p>
                                  
                                </div>
                        
                         </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="mir.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">Mir</h5>
                                  <p class="card-text">Le Mir est un trois-mâts carré construit en 1987 par les chantiers polonais de Gdansk. Son nom signifie Paix en Russe. On le surnomme le sprinter des mers car il peut atteindre une vitesse maximum de 19,4 nœuds.

Avec ses 2 720 m² de voilure, ce navire-école est aujourd’hui la propriété de l’Académie de Saint-Petersbourg  en Russie.</p>
                                  
                                </div>
                        
                         </div>
                </div>
                <div class="col-md-4">
                        <div class="card">
                                <img class="card-img-top" src="christian.jpg" alt="Card image cap">
                                <div class="card-body">
                                  <h5 class="card-title">christian Radish</h5>
                                  <p class="card-text">Le Christian Radish est un trois-mâts carré construit par Frammaes Shipyard à Sandefjord en Norvège grâce au mécénat d'un homme d'affaires sans héritier Christian Radish, qui, à sa mort en 1889, légua 50 000 couronnes à l'association Christiana School-ship pour la construction d'un trois-mâts.

Les travaux débutèrent en 1935. Conçu pour servir de navire-école de la marine marchande norvégienne, il fut livré le 17 juin 1937. Il est basé à Oslo. Depuis 1999, il est exploité dans le cadre de croisières payantes et participe à de nombreux événements maritimes.</p>
                                  
                                </div>
                        
                         </div>
                </div>
         </div>          
        
    </body>
</html>

        <a href="membrevisiteur.php" OnClick="javascript:window.print()">Imprimer cette Page</a>
    </body>
</html>
