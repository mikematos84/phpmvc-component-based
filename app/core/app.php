<?php

class App{

    public $url = null;
    public $controller = 'home';
    public $action = 'index';
    public $params = [];
    
    public function __construct(){
        // header
        require_once COMPONENTS . '/header/controller.php';
        $header = new HeaderController();
        $header->index([]);

        //parse the url
        $this->route();

        require_once COMPONENTS . '/footer/controller.php';
        $footer = new FooterController();
        $footer->index([]);
    }

    public function route(){
        $this->url = $this->parseURL();

        //if has requested view
        if(isset($this->url[0])){
            $this->controller = $this->url[0];
            unset($this->url[0]);
        }

        //if has requested view action
        if(isset($this->url[1])){
            $this->action = $this->url[1];
            unset($this->url[1]);
        }

        //save modifying params
        $this->params = $this->url ? array_values($this->url) : [];

        //load controller
        if(file_exists(COMPONENTS . '/' . $this->controller . '/controller.php')){
            require_once COMPONENTS . '/' . $this->controller . '/controller.php';
            $class = ucfirst($this->controller) . 'Controller';
            $controller = new $class();
        }else{
            require_once COMPONENTS . '/error/controller.php';
            $controller = new ErrorController();
        }

        if(method_exists($controller, $this->action)){
            $controller->{$this->action}($this->params);
        } 
    }

    public function parseURL(){
        if(isset($_GET['url'])){
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
