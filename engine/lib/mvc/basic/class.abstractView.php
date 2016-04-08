<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'engine/lib/smarty/Smarty.class.php';
/**
 * Description of abstractView
 *
 * @author magnuskruschwitz
 */
class abstractView {
    

    protected $view;
    protected $model;
    protected $controller;
    protected $debug;

    public function __construct($model, $controller,$debug = false) {
        $this->view = new Smarty();
        $this->model = $model;
        $this->controller = $controller;
        $this->debug = $debug;
        
        $this->defineTemplatePaths();
        
        $this->view->debugging = $this->debug;
                
    }

    public function __destruct() {
        
    }
    
    protected function defineTemplatePaths(){
        $this->view->template_dir = "templates/templates/";
        $this->view->compile_dir = "templates/templates_c/";
        $this->view->config_dir = "templates/configs/";
        $this->view->cache_dir = "templates/caches/";
    }

}
