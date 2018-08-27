<?php
class Controller{
    protected $model;
    protected $view;
    protected $args = array();

    function __construct($name){
        $this->args['name'] = $name;
        $this->view = new View($name);
        $model_path = 'models/'.$name.'_Model.php';
        if(file_exists($model_path)){
            require $model_path;
            $modelClassName = $name.'_Model';
            $this->model = new $modelClassName();
        }
    }

    function index(){
        $this->view->render();
    } 
}