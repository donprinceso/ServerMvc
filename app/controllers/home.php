<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author ServerLand
 */
class Home extends Autoloader{
     
    public function __construct() {
        $this->pagemodel = $this->model('page');
    }

    public function index($name = 'The Home Page') {

        $this->pagemodel->name = $name;
        $this->pagemodel->name;
        $this->view('home/index');
    }

    public function about() {
        $this->view('home/about');
    }

}
