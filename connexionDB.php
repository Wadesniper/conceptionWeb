<?php
class connexionDB {
    private $host='localhost';    // nom de l'host
    private $DB_name='bdd_9_1';     // nom de la base de donnée
    private $user='grp_9_1';         // utilisateur
    private $pass='fahKiehoh0';         // mot de passe
    private $connexion;

    function __construct($host = null, $DB_name = null, $user = null, $pass = null){
        if($host != null){
            $this->host = $host;           
            $this->DB_name = $DB_name;           
            $this->user = $user;          
            $this->pass = $pass;
        }
    try{
        $this->connexion = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->DB_name,
            $this->user, $this->pass, array(PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8', 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch (PDOException $e){
        echo 'Erreur : Impossible de se connecter  à la BDD !';
    die();
   }
  }
    public function query($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);

        return $req;
    }
    public function insert($sql, $data = array()){
        $req = $this->connexion->prepare($sql);
        $req->execute($data);
    }
}
?>


