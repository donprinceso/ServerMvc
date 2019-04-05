<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author ServerLand
 */
class AccountController extends Autoloader {
   
    //protected $account;
    public function __construct() {
        $this->account= $this->model('Account') ;
    }

    public function create() {
         
        }
    }

}
