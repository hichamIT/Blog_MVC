<?php
/*
 * Base Controller
 * Load Models & Views
 * 
 */
 
class Controller{

    //load Models
    public function model($model){

        require_once '../app/models/'.$model.'.php';
        return new $model;

    }

    public function view($view,$data = []){

        if (file_exists('../app/views/'.$view.'.php')) {

            require_once '../app/views/'.$view.'.php';
        }else {
            
            die('file does not exist');
        }

    }




}//End Of The Class