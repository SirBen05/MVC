<?php
class Bootstrap{
    function __construct()
    {
        // Sutvarkomas url į masyvo elementus
        $url = isset($_GET['url'])? $_GET['url'] : 'index'; 
        $url = rtrim($url, '/');  
        $url = explode('/', $url); 

        // Puslapis nustatomas į pagrindinį, esant tuščiam url
        if($url[0] ==='index.php'){
            $page = 'index';
        }else{
            $page = $url[0];
        }

        // Tikrinama ar egzistuoja kontroleris
        $file = 'controllers/'.$page.'.php';
        if(file_exists($file)){
            // Jeigu taip: pareikalajauma kontrolerio klasė
            require($file);
        }else{
            // Jeigu ne: rodoma klaida
            $this->showError();
            return false; // nutraukia puslapio eigą
        }

        // Sukuriamas kviečiamo kontrolerio objektas
        $controller = new $page;
        if(isset($url[1])){
            if(method_exists($controller, $url[1])){
                if(isset($url[2])){
                    $controller->{$url[1]}($url[2]);
                }else{
                    $controller->{$url[1]}();
                }
            } else {
                $this->showError();
            }
        }else{
            $controller->index();
        }
    }

    function showError(){
        require('controllers/Mistake.php');
        $error = new Mistake();
        $error->index();
    }
}