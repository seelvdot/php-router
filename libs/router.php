<?php

    class Router{

        protected $uri = array();
        protected $controller;
        protected $action;

        public function __construct(){
            $this->Parameters();
        }

        public function Parameters(){
            $this->uri = (isset($_GET['path'])) ? explode('/', $_GET['path']) : array('');
        }
        public function Parameter($i){
            if(array_key_exists($i,$this->uri)){
                return $this->uri[$i];
            }else{
                return false;
            }
        }

        public function Controller(){
            $this->controller = ($this->uri[0] == null) ? 'index' : $this->uri[0];
            return (is_string($this->controller)) ? $this->controller : 'index';
        }

        public function Action(){
            $this->action = (isset($this->uri[1]) && strlen($this->uri[1]) != 0 && is_string($this->uri[1])) ? $this->uri[1] : '';
            return $this->action;
        }
    }
