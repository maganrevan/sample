<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * this is the basic to define a controller
 *
 * @author magnuskruschwitz
 */
class abstractController {
    protected $modal;
    protected $controllerName;


    public function __construct($model) {
        $this->modal = $model;
    }
    
    public function getControllerName(){
        return $this->controllerName;
    }
}
