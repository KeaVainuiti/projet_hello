<?php
require("connexion_bdd.php");

class langue {

    public function createLangue($name,$translate){

        global $connect_bdd;

        $request_insert = "INSERT INTO langue (name,translate) VALUES ('" . $name . "','" . $translate . "')";

        $connect_bdd ->query();
    }


    public function getAllLangue(){

        global $connect_bdd ;
        // je récupère liste langue
        $request_all = "SELECT * FROM langue";
        $get_all_langue = $connect_bdd ->query();

        return $get_all_langue;
    }

    public function deleteLangue($id){

        global $connect_bdd ;

        $delete_langue_request = "DELETE FROM langue WHERE id=".$id;
        $connect_bdd ->query($delete_langue);
    }

    public function updateLangue($id,$name,$translate){

        global $connect_bdd ;

        $update = "UPDATE langue SET name='".$name."',translate='".$translate."' WHERE id=".$id;
        $connect_bdd ->query($update);
    }

}

?>