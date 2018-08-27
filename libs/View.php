<?php
class View {
    public $js; // not used yet
    public $args = array();

    public function __construct($name){
        $this->args['name'] = $name;
    }

    public function render(){
        require 'views/common/template.php';
    }
}