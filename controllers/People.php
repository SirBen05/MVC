<?php

class People extends Controller{
    function __construct(){
        parent::__construct(get_class($this));
        $this->view->args['peopleList'] = $this->model->getPeople();
    }
    function addPerson(){
        $this->model->addPerson([
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'age' => $_POST['age']
        ]);
        //TODO: Error checking
        header('location: '.URL.'people');
    }
    function deletePerson($id){
        $this->model->deletePerson($id);
        //TODO: Error checking
        header('location: '.URL.'people');
    }
    function updatePerson($id){
        $this->view->args['data'] = $this->model->getPersonData($id);
        $this->view->args['subPage'] = '/update';
        $this->index();
    }
    function savePerson($id){
        $this->model->savePerson([
            'id' => $id,
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'age' => $_POST['age']
        ]);
        //TODO: Error checking
        header('location: '.URL.'people');
    }
}