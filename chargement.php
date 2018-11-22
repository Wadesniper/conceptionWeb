<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
        <link rel="stylesheet" href="fondInfoUtil.css" />
    </head>
    <body>

<form method="POST" action="chargement.php">
    <p>nom du navire: </p>
    <input type="text" name="nom">
    <p>saisir vitesse: </p>
    <input type="number" name="vitesse">
    <p> saisir longueur: </p>
    <input type="number" name="longueur"><br/><br/>
    <p> saisir id bateau: </p>
    <input type="number" name="id_bateau"><br/><br/>
    <input type="submit" value="Ajouter" name="submit">
    
</form>


    <?php
  define('HOST', 'localhost');
  define('DB_NAME', 'test');
  define('USER', 'root');
  define('PASS', 'root');
        try
        {
            $bdd = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
            {
            $fileName = $_FILES['userfile']['name'];
            $tmpName  = $_FILES['userfile']['tmp_name'];
            $fileSize = $_FILES['userfile']['size'];
            $fileType = $_FILES['userfile']['type'];
            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);
            if(!get_magic_quotes_gpc())
            {
            $fileName = addslashes($fileName);
            }
            
            $req = $bdd->prepare('INSERT INTO image (name, size, type, content, id_bateau ) VALUES(:nom, :taille, :type, :contenu, :id_bateau)');
            $req->execute(array(
                'nom' => $fileName,
                'taille' => $fileSize,
                'type' => $fileType,
                'contenu' => $content,
                'id_bateau' => $fileid_bateau,
                ));
            
            
            echo "File $fileName uploaded";
            }
            ?>
            <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellspacing="1" cellpadding="1">
            <tbody>
            <tr>
            <td width="246">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
            <input id="userfile" type="file" name="userfile" /></td>
            <td width="80"><input id="upload" type="submit" name="upload" value=" Upload " /></td>
            </tr>
            </tbody>
            </table>
            </form>
        </body>
        </html>
