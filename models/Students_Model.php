<?php

class Students_Model extends Model{
    public function __construct(){
        parent::__construct();
    }

    function getStudents(){
        $sql = $this->database->prepare(
            "SELECT p.id, p.name, p.surname, p.age, s.form, s.avg  
               FROM student AS s
               JOIN person AS p
                 ON s.person_id = p.id;");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    function addStudent($array){
        $sql = $this->database->prepare(
           "INSERT INTO person(name, surname, age)
            SELECT :name, :surname, :age;

            INSERT INTO student(form, `avg`, person_id)
            SELECT :form, :avg, id
              FROM person
             WHERE name = :name AND surname = :surname AND age = :age
             LIMIT 1;");

        $sql->execute([
            ':name'      => $array['name'],
            ':surname'   => $array['surname'],
            ':age'       => $array['age'],
            ':form'      => $array['form'],
            ':avg'       => $array['avg']
        ]);
    }
    function getStudent($id){
        $sql = $this->database->prepare(
        "SELECT p.id, p.name, p.surname, p.age, s.form, s.avg
           FROM person AS p
           JOIN student AS s
             ON s.person_id = p.id
          WHERE p.id = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    function deleteStudent($id){
        $sql = $this->database->prepare("DELETE FROM `student` WHERE person_id = :id;");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    function saveStudent($array){
        $sql = $this->database->prepare(
        "UPDATE person
        SET name = :name, surname = :surname, age = :age
        WHERE id = :id;
        
        UPDATE student
        SET form = :form, avg = :avg
        WHERE person_id = :id;");
    
        $sql->execute([
            ':id'        => $array['id'],
            ':name'      => $array['name'],
            ':surname'   => $array['surname'],
            ':age'       => $array['age'],
            ':form'      => $array['form'],
            ':avg'       => $array['avg']
        ]);
    }
}