<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of routing
 *
 * @author magnuskruschwitz
 */
require_once 'model/class.model.php';
require_once 'view/class.view.php';

class routing {
    protected $index;
    protected $controller;
    protected $model;
    protected $view;

    public function __construct() {
        $this->model = new model();
        if($_GET){
            switch ($_GET['cat']){
                case 'index':
                    require_once 'controller/class.indexController.php';
                    $this->controller = new indexController($this->model);
                    
                    break;
                default:
                    $this->controller = 'error';
                    break;
            }
        }
        else{
            $this->controller = "index";
        }
        
        $this->view = new view($this->model, $this->controller, FALSE);
    }
    
    public function getController(){
        return $this->controller;
    }
    
    public function getModel(){
        return $this->model;
    }
    
    public function getView(){
        return $this->view;
    }
}
