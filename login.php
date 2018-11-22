<?php
session_start();

if(isset($_POST['submit']))
{
    $username=htmllentities(trim($_POST['username']));
    $password=htmllentities(trim($_POST['password']));

    if($username && $password)
    {
        password= md5($password);
        $connect=mysql_connect('localhost','root','root') or die('Error');
    mysql_select_db('phplogin');
    $query("SELECT * FROM users WHERE username = '$username' && $password='$password' ")
    $rows=mysql_num_rows($query)
    if($rows==1)
    {
        $_SESSION['username']=$username;
header('Location:membre.php');
    }else echo"pseudo ou mot de passe incorrect";

}







<form method="POST" action="login.php">
    <p>Votre pseudo: </p>
    <input type="text" name="username">
    <p>Votre password: </p>
    <input type="password" name="password"><br/><br/>
    <input type="submit" value="s'inscrire" name="submit">
</form>