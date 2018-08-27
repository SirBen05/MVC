<?php

class Fruit extends Controller{
    function __construct(){
        parent::__construct(get_class($this));
        $this->view->args['fruitList'] = $this->model->getFruit();
    }
    function addFruit(){
        $this->model->addFruit([
            'weight' => $_POST['weight'],
            'color' => $_POST['color'],
            'cultivar' => $_POST['cultivar']
        ]);
        //TODO: Error checking
        header('location: '.URL.'fruit');
    }
    function deleteFruit($id){
        $this->model->deleteFruit($id);
        //TODO: Error checking
        header('location: '.URL.'fruit');
    }
    function updateFruit($id){
        $this->view->args['data'] = $this->model->getFruitData($id);
        $this->view->args['subPage'] = '/update';
        $this->index();
    }
    function saveFruit($id){
        $this->model->saveFruit([
            'id' => $id,
            'year' => $_POST['year'],
            'color' => $_POST['color'],
            'cultivar' => $_POST['cultivar']
        ]);
        //TODO: Error checking
        header('location: '.URL.'fruit');
    }
}