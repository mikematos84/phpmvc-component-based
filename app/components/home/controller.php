<?php 

class HomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index($params = []){
        $this->load('home/index')->render([
            'sections' => $this->model->sections
        ]);
    }

}