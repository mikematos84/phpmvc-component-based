<?php 

class ErrorController extends Controller{

    public $statusCode = 404;

    public function __construct($injects = []){
        parent::__construct($injects);
    }

    public function index($params = []){
        if(isset($params['statusCode'])){
            $this->statusCode = $params['statusCode'];
            unset($params['statusCode']);
            $params = array_values($params);
        }
        $this->{'error' . $this->statusCode}($params);
    }

    public function error404($params){
        $this->load('error/index')->render([
            'statusCode' => $this->statusCode,
            'message' => 'What the heck were you thinking. You can\'t go there'
        ]);
    }

}