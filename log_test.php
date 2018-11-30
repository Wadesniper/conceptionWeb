<?php
session_start();
if (isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}
if(!empty($_POST)){
    extract($_POST);
    $valid = true;

    if (isset($_POST['connexion'])){

        $email = htmlentities(strtolower(trim($email)));
        $password = trim($password);
    }
}
if(empty($email)){
    $valid = false;
    $error_email = "Veuillez renseigner votre email";
}
if(empty($password)){
    $valid = false;
    $error_password = "Veuillez renseigner un mot de passe";
}
    // On vérifit que le mail et le mot passe coincident
    $req = $DB->query('SELECT * FROM users WHERE nom = ? and email = ? and password = ? and type = ?',
        array($nom, $email, $password, $type));
    $req = $req -> fetch();

if($req['email'] == ""){
        $valid = false;
        $error_email = "le mail est incorrecte";
}

if($rep['password'] == ""){
       $valid = false;
       $error_password = "le mot de passe est incorrecte";
}
    if($valid){
       $_SESSION['type'] = $req['type']; 
       $_SESSION['nom'] = $req['nom'];
       $_SESSION['email'] = $rep['email']; 
       header('Location: index.php');
       exit;
    }
?> 


            <?php
                if (isset($error_email))
                {
                echo $error_email;
                }
            ?>

            <?php
                if (isset($error_password))
                {
                echo $error_password;  
                }
            ?>

            if($req['email'] == ""){
        $valid = false;
        $error_email = "le mail est incorrecte";
}

if($rep['password'] == ""){
       $valid = false;
       $error_password = "le mot de passe est incorrecte";
}
$_SESSION['type'] = $req['type']; 
       $_SESSION['nom'] = $req['nom'];
       
       $req_mail = $DB->query("SELECT email FROM users WHERE email = ?",
            array($email));

        $req_mail = $req_mail->fetch();
        if ($req_mail['email'] == ""){
            $valid = false;
            $error_email = "C'est le bon mail";
            }
            if($valid){
       $_SESSION['email'] = $req_mail['email']; 
       header('Location: index.php');
       exit;
    }
    <?php
session_start();
include_once('includes.php');
if (isset($_SESSION['id'])){
    header('Location: index.php');
    exit;
}
if(!empty($_POST)){
    extract($_POST);
    $valid = true;
    $email = htmlentities(strtolower(trim($email)));
    $password = trim($password);
}

if(empty($email)){
    $valid = false;
    $error_email = "Veuillez renseigner votre email";
}
if(empty($password)){
    $valid = false;
    $error_password = "Veuillez renseigner un mot de passe";
}
    // On vérifit que le mail et le mot passe coincident
    $req_mail = $DB->query("SELECT email FROM users WHERE email = ?",
    array($email));
    $req_mail = $req_mail->fetch();

if ($req_mail['email'] <> ""){
    $valid = false;
    $error_email = "Ce mail existe déjà";
    }
?>