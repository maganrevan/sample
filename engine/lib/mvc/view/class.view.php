<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of view
 *
 * @author magnuskruschwitz
 */
require_once 'engine/lib/mvc/basic/class.abstractView.php';

class view extends abstractView{

    public function __construct($model, $controller, $debug) {
        $this->controller = $controller;
        $this->model = $model;
        $this->debug = $debug;
        
        parent::__construct($this->model, $this->controller, $this->debug);

        $this->initTemplate();
    }
    
    protected function initTemplate(){
        switch ($this->controller->getControllerName()) {
            case "index":
                $this->view->display('index/index.tpl');
                break;

            default:
                die($this->controller->getControllerName());
                break;
        }
    }
}
