<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Article
 *
 * @author jdpaoli,lafon sebastien
 */
class Article  extends Database{
    //put your code here
    
    private  $id;
    private $designation;
    private $prixHT;
    private $stock;
    private $visible;
    private $image;
    private $tva;

    /**
     * Constructeur
     */
 
    /**
     * AfficherArticles : affiche la liste des articles
     * @param type $param
     */
    public function Afficher() {

         // requete sur la base de donnée             
        $sql = "SELECT * FROM tb_article ORDER BY a_designation ASC LIMIT 15";            
        $req =$this->db->query($sql);     
        // boucle d'affichage des articles
        while ($article = $req->fetch()) {
            
                echo $article['id_article'];
                echo $article['a_designation'];
                echo $article['a_pht'];
                echo $article['a_quantite_stock'];
                echo $article['a_visible'];
                echo  $article['url_image'];
                echo  $article['id_tva'];
                echo '<br>';
        }
    }   
}