<?php
/*require  "class/Database.php";*/
/*fichier de session*/
/*L'idée est de créer un Id de commande dans a base dés le début d'une session
puis de stocker cet id dans une variable globale $idCommande 
que l'on utilisera dans es scriptes de création de ligne de commande*/

/*si 'utilisateur n'a pas de cookie sur son ordinateur alors on crée une session_token_manager
sinon on utilise ses vaeurs de cookies pour reprendre la commande qui n'a pas abouti*/
/*if isset($cookie)*/
/*utiiser les valeurs de ce cookies */

/*sinon on crée une nouvelle session*/
/*démarrage de la session*/

session_start();

/*création d'une variabe globale $_Session*/

$_SESSION["sessionInvite"];

print_r($_SESSION); 

/*class Database {
    //attributs
    protected $db;
    
    public function __construct() {
        $this->connexion();
    }
    
    // methodes
    public function connexion() {    
        // connexion à la base de donnée
                    try{
                             $this->db = new PDO('mysql:host=localhost;dbname=db_speedymarket;charset=utf8', 'root', '',
                             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
	}catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
            
     }
       
        
    }*/

/*$sql = "INSERT INTO `db_speedymarket`.`tb_commande` (`id_commande`, `c_date`, `c_dateretrait`, `id_statut`, `client_id_pers`, `prepa_id_pers`) VALUES ('', '', NULL, NULL, NULL, NULL)";

$req = mysql_query($sql) ;*/


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=db_speedymarket;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$bdd->query('INSERT INTO `db_speedymarket`.`tb_commande` (`id_commande`, `c_date`, `c_dateretrait`, `id_statut`, `client_id_pers`, `prepa_id_pers`) 
VALUES ("NULL", CURRENT_TIMESTAMP, NULL, 1, NULL, NULL)');



/*on va récupérer le drnier ID entré dans a base de données sur la la table tb_commande*/
$reponse = $bdd->query('SELECT MAX(id_commande) AS lastIdCommande FROM tb_commande');

while ($donnees = $reponse->fetch())
{
	echo $donnees['lastIdCommande'] . '<br />';
}

$reponse->closeCursor();


