<?php
require("connexion_bdd.php");

class langue {
    /**
     * create a language
     * 
     * param[string] $name,$translate 
     * return void
     */
    public function createLangue($name,$translate){

        global $connect_bdd;

        $request_insert = "INSERT INTO langue (name,translate) VALUES ('" . $name . "','" . $translate . "')";
        $connect_bdd ->query();
    }

    
    /**
     *  Retrieving all languages
     * 
     * param[string] $name,$translate 
     * return void
     */
    public function getAllLangue(){

        global $connect_bdd ;
        // je récupère liste langue
        $request_all = "SELECT * FROM langue";
        $get_all_langue = $connect_bdd ->query();

        return $get_all_langue;
    }

        /**
     *  Remove language select from langue
     * 
     * param[string] $id
     * return void
     */
    public function deleteLangue($id){

        global $connect_bdd ;

        $delete_langue_request = "DELETE FROM langue WHERE id=".$id;
        $connect_bdd ->query($delete_langue);
    }

      /**
     *  Update language
     * 
     * param[string] $name,$translate,$id
     * return void
     */
        
    public function updateLangue($id,$name,$translate){

        global $connect_bdd ;

        $update = "UPDATE langue SET name='".$name."',translate='".$translate."' WHERE id=".$id;
        $connect_bdd ->query($update);
    }

}

?>
