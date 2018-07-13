<?php


class Pages extends Controller {

    public function __construct(){
       
    }

    public function index(){
        $data = [
            'title'=> 'welcome index',
            'description' => 'Hicham El khaldi shareposts site from mvcframwork'
        ];
        $this->view('pages/index',$data);
        
    }

    
    public function about(){
        $data = [
            'title'=> 'welcome about',
            'description' => 'Hicham El khaldi shareposts site from mvcframwork Page about'
    
        ];
        $this->view('pages/about',$data);
        
    }


}