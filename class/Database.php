<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author jdpaoli
 */
class Database {
    //attributs
    protected $db;
    
    public function __construct() {
        $this->connexion();
    }
    
    // methodes
    public function connexion() {    
        // connexion à la base de données
                    try{
                             $this->db = new PDO('mysql:host=localhost;dbname=db_speedymarket;charset=utf8', root, '',
                             array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
	}catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	}
            
     }
     
     

        
        
    }
    

