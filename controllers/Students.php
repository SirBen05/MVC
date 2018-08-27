<?php
class Students extends Controller{
    function __construct(){
        parent::__construct(get_class($this));
        $this->view->args['studentList'] = $this->model->getStudents();
    }

    function deleteStudent($id){
        $this->model->deleteStudent($id);
        //TODO: Error checking
        header('location: '.URL.'students');
    }

    function addStudent(){
        $this->model->addStudent([
            'name'      => $_POST['name'],
            'surname'   => $_POST['surname'],
            'age'       => $_POST['age'],
            'form'      => $_POST['form'],
            'avg'       => $_POST['avg']
        ]);
        //TODO: Error checking
        header('location: '.URL.'students');
    }
    
    function updateStudent($id){
        //$this->view->args['data'] = $this->model->getStudentData($id);
        $this->view->args['data'] = $this->model->getStudent($id);
        $this->view->args['subPage'] = '/update';
        $this->index();
    }
    function saveStudent($id){
        $this->model->saveStudent([
            'id' => $id,
            'name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'age' => $_POST['age'],
            'form' => $_POST['form'],
            'avg' => $_POST['avg']
        ]);
        header('location: '.URL.'students');
    }
}