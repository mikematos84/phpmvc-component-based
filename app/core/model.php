<?php

class Model{

    public function __construct(){
        //construct class
    }

    public function getJSON($file){
        if(file_exists(APP_ROOT . '/data/' . $file . '.json')){
            return json_decode(file_get_contents(APP_ROOT . '/data/' . $file . '.json'), true);
        }
        return null;
    }

}
