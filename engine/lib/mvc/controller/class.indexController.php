<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexController
 *
 * @author magnuskruschwitz
 */
require_once 'engine/lib/mvc/basic/class.abstractController.php';

class indexController extends abstractController{
    
    public function __construct($model) {
        $this->model = $model;
        parent::__construct($this->model);
        $this->controllerName = 'index';
    }
}
