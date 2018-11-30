<?php
session_start();
include_once('includes.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />

  <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <title>Programme Armada 2019</title>

        
</head>
<body>
    <!-- Navbar de la page -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
                                    <a class="navbar-brand" href="#">Armada 2019</a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                      <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item">
                                                <a class="nav-link" href="index.php">Accueil<span class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item active">
                                                <a class="nav-link" href="programme1.php">Le Programme</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="Bateaux.php">Les Bateaux</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.php">Nous Contacter</a>
                                            </li>
                                            <?php
                                            if($_SESSION['type'] == 'ad'){?>
                                                <li class="nav-item">
                                                <a class="nav-link" href="gestion_inscrits.php">Gestion des inscrits</a>
                                                </li>
                                            <?php } ?> 
                                            <?php
                                           if($_SESSION['type'] == 'rb'){?>
                                            <li class="nav-item">
                                            <a class="nav-link" href="gestion_bateau.php">Gérer votre Bateau</a>
                                            </li>
                                        <?php } ?>    
                                        </ul>
                                        <?php
                                        if(isset($_SESSION['type'])){
                                        ?>  
                                            <a href="logout.php" class="btn btn-danger">Se déconnecter</a>
                                        <?php
                                        }else{
                                        ?>    
                                            <div class="btn-group">
                                            <a href="register.php" class="btn btn-info">S'enregister</a> 
                                            <a href="login.php" class="btn btn-success">Se connecter</a> 
                                            </div> 
                                        <?php
                                        }
                                        ?>
                                                                           
                              </nav>
<p>
    <h1>SAMEDI 8 JUIN</h1>
    Grand jour pour l’Armada ! L’inauguration officielle se déroule à 11h avec l’ensemble des personnalités de la rive droite à la rive gauche. En début de soirée, et avant le feu d’artifice, l’Armada organise le diner des capitaines.
    
    Tir d'un feu d’artifice vers 23h30

   <h1>DIMANCHE 9 JUIN</h1> 
Grand moment d’émotion, fidèle à une tradition des gens de la mer en France : à 10h30, Messe des Marins. Cette messe rassemble entre 2 000 et 5 000 personnes. L’occasion de partager avec tous les marins venus du monde entier. La messe est animée par une chorale de plus de 700 enfants.

Tir d'un feu d’artifice vers 23h30

<h1>LUNDI 10 JUIN</h1>
La semaine d’animations sur les quais se poursuit. Découvrez le village et les nombreuses possibilités de restauration ou d’activités, sur Seine ou sur les quais. Les voiliers et les navires sont ouverts à la visite. Sur les quais, les animations proposées par la Métropole vous attendent. A découvrir le Panorama XXL, les bars et les restaurants en bord de Seine.

Tir d'un feu d’artifice vers 23h30

 <h1>MARDI 11 JUIN</h1>
Depuis déjà 7 jours, Rouen est le plus grand port du monde. Les plus beaux voiliers à visiter, les bateaux promenades sur Seine vous permettent de les découvrir avec un autre regard, vue de Seine. Il reste encore 6 jours pour découvrir toutes les animations proposées.

Tir d'un feu d’artifice vers 23h30

 <h1>MERCREDI 12 JUIN</h1>
L’Armada envahit la ville. Les quais offrent un des plus beaux spectacles au monde, celui des géants des mers et le grand défilé des équipages investit les rues de la ville de 14h30 à 16h30. Au rythme des musiques des fanfares, les habitants et les visiteurs découvrent les équipages dans leur tenue d’apparat.

Tir d'un feu d’artifice vers 23h30

<h1>JEUDI 13 JUIN</h1>
Les grands voiliers et les navires sont toujours ouverts à la visite. Profitez de cette journée pour découvrir toutes les animations proposées par l’Armada en complément de la visite gratuite des bateaux. Village, stands, restaurants, ... A découvrir également lors de votre séjour, la ville de Rouen, sa Cathédrale, ses rues médiévales, ses commerces.

Tir d'un feu d’artifice vers 23h30


<h1>VENDREDI 14 JUIN</h1>
C’est le dernier week-end. Aujourd’hui, c’est le congrès des villes marraines. Les animations sur les quais battent leur plein. Que la visite des quais se déroule à l’aube, en journée, ou dans la nuit, la magie est la même.

Tir d'un feu d’artifice vers 23h30


<h1>SAMEDI 15 JUIN</h1>
A vos marques, prêts … Sportez avec les marins. Le grand footing des marins déferle sur les quais et la ville. L’occasion de partager des rencontres, des échanges, et de profiter de leur séjour à Rouen. Les animations sur les quais, les voiliers, les navires, en ce dernier Week-end, l’Armada, c’est presque terminé….. Un dernier regard sur le plus grand port du monde au rythme du dernier concert de la Région Normandie et sous les lumières du plus beau feu d’artifice vers 23h30.

<h1>DIMANCHE 16 JUIN</h1>
C’est le grand jour, prenez place pour le  plus grand spectacle!
A 11h, départ de tous les voiliers pour la grande parade de Rouen à la mer, organisée par le Département de Seine Maritime. Le pont Flaubert salue ce grand départ et lève son tablier de 10h à 16h. La patrouille de France rend également son hommage en survolant la Seine.
Tout le long de la Seine, prenez place, en familles, entre amis, et vivez ce grand moment : les équipages sont dans les voiles, les spectateurs applaudissent, agitent leurs drapeaux en signe d’au-revoir.
A 17h, c’est la clôture officielle de la 7e édition de l’Armada sur les quais de Rouen.

<h1>La nostalgie nous gagne déjà…</h1>



</p>

<a href="index.php">retour a la page d'accueil</a>
</body>
</html>