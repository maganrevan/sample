<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once __DIR__."/lib/mvc/class.routing.php";

/**
 * this Class will include everything else
 *
 * @author magnuskruschwitz
 */
class main {

    protected $view;
    protected $controller;
    protected $model;
    protected $response;

    public function __construct() {
        $this->response = new routing();
        $this->view = $this->response->getView();
        
    }

    public function __destruct() {
        
    }

}

?>
