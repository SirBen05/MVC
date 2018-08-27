<?php

class Fruit_Model extends Model{
    public function __construct(){
        parent::__construct();
    }

    function getFruit(){
        $sql = $this->database->prepare("SELECT * FROM `fruit`");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    function addFruit($data){
        $sql = $this->database->prepare("INSERT INTO `fruit` (`weight`, color, cultivar) VALUES 
        (:weight, :color, :cultivar);");
        $sql->execute([
            ':weight' => $data['weight'],
            ':color' => $data['color'],
            ':cultivar' => $data['cultivar']
        ]);
    }

    function deleteFruit($id){
        $sql = $this->database->prepare("DELETE FROM `fruit` WHERE id= :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    function getFruitData($id){
        $sql = $this->database->prepare("SELECT * FROM `fruit` WHERE id = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    function saveFruit($data){
        $sql = $this->database->prepare("UPDATE fruit SET `weight` = :weight, color = :color, cultivar = :cultivar
            WHERE id = :id;");
        $sql->execute([
            ':id' => $data['id'],
            ':weight' => $data['weight'],
            ':color' => $data['color'],
            ':cultivar' => $data['cultivar']
        ]);
    }

}