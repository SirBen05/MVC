<?php
class Mistake extends Controller{
    function __construct(){
        parent::__construct(get_class($this));
    }
}