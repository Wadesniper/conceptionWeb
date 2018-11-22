
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ma page web</title>
        <link rel="stylesheet" href="fondInfoUtil.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <?php

define('HOST', 'localhost');
define('DB_NAME', 'test');
define('USER', 'root');
define('PASS', 'root');
$db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);

        try
        {
            $db = new PDO('mysql:host='.HOST .';dbname='.DB_NAME, USER, PASS);
        }
        catch (Exception $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
        if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
            {
            $fileName = $_FILES['userfile']['name'];
            $fileSize = $_FILES['userfile']['size'];
            $fileType = $_FILES['userfile']['type'];
            $tmpName  = $_FILES['userfile']['tmp_name'];
            $fp      = fopen($tmpName, 'r');
            $content = fread($fp, filesize($tmpName));
            $content = addslashes($content);
            fclose($fp);
            if(!get_magic_quotes_gpc())
            {
            $fileName = addslashes($fileName);
            }
            
            $req = $db->prepare('INSERT INTO image (name, size, type, content ) VALUES(:nom,  :size, :type, :content)');
            $req->execute(array(
                'nom' => $fileName,
                'size' => $fileSize,
                'type' => $fileType,
                'content' => $content
                ));
            echo "File $fileName uploaded";
            }
            ?>
            <form method="post" enctype="multipart/form-data">
            <table width="350" border="0" cellspacing="1" cellpadding="1">
            <tbody>
            <tr>
            <td width="246">
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000" >
            <input id="userfile" type="file" name="userfile"/></td>
            <td width="80"><input id="upload" type="submit" name="upload" value=" Upload " /></td>
            </tr>
            </tbody>
            </table>
            </form>
        </body>
        </html>