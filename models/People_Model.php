<?php

class People_Model extends Model{
    public function __construct(){
        parent::__construct();
    }

    function getPeople(){
        $sql = $this->database->prepare("SELECT * FROM `person`");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    function addPerson($data){
        $sql = $this->database->prepare("INSERT INTO `person` (`name`, surname, age) VALUES 
        (:name, :surname, :age);");
        $sql->execute([
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':age' => $data['age']
        ]);
    }

    function deletePerson($id){
        $sql = $this->database->prepare("DELETE FROM `person` WHERE id= :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    function getPersonData($id){
        $sql = $this->database->prepare("SELECT * FROM `person` WHERE id = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    function savePerson($data){
        $sql = $this->database->prepare("UPDATE person SET `name` = :name, surname = :surname, age = :age
            WHERE id = :id;");
        $sql->execute([
            ':id' => $data['id'],
            ':name' => $data['name'],
            ':surname' => $data['surname'],
            ':age' => $data['age']
        ]);
    }

}