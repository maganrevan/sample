<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of abstractModal
 *
 * @author magnuskruschwitz
 */
class abstractModel {

    protected $dbo;
    protected $user;
    protected $pass;
    protected $database;
    protected $host;

    public function __construct() {
        $this->initDatabase();
        /*echo '<pre>';
        $this->getInitValue();
        echo '</pre>';*/
    }

    protected function initDatabase() {
        $xml = simplexml_load_file("databaseconnector.xml");
        $this->host = $xml->host;
        $this->pass = $xml->passwort;
        $this->user = $xml->user;
        $this->database = $xml->database;
        $this->dbo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database, $this->user, $this->pass);
    }
    
    public function getInitValue(){
        try{
            $local = $this->dbo->prepare("SELECT * FROM test");
            $local->execute();
            echo "<pre>";
            var_dump($local);
            $result = $local->fetchAll(PDO::FETCH_ASSOC);
            var_dump($result);
            echo "</pre>";
            die();
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

}
