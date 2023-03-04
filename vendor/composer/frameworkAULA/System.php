<?php

namespace frameworkAULA;

class System{
    private $_url;
    private $_controller;
    private $_action;


    public function __construct()
    {
        
    }

    public function setUrl($url){
        $this -> url = $url;
    }
    public function getUrl(){
        
    }

    public function setController(){

        $this -> controller = empty ($this->url(["controller"]) ? "Index" ?
        $this -> url["controller"])

    }
    public function getController(){
        
    }

    public function setAction(){
        
        $this -> _action = empty ($this->url(["action"]) ? "Index" ?
        $this -> url["action"])

    }
    public function getAction(){
        
    }
}
