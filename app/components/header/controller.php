<?php 

class HeaderController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index($params = []){
        $this->load('index')->render([]);
    }

}