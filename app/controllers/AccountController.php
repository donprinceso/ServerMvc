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
        if($_SERVER['REQUEST_METHOD']=='+POST'){
            $_POST= filter_input_array(INPUT_POST.FILTER_SANITIZE_STRING);
            $error=0;
            $data=[
                'email'=> trim($_POST['email']),
                'first_name'=> trim($_POST['first_name']),
                'last_name'=> trim($_POST['last_name']),
                'password'=> trim($_POST['password']),
                'confirm_password'=> trim($_POST['confirm_password']),
                'gender'=> trim($_POST['gender=']),
            ];
            if(empty($data['email'])){
                $data['text_err']='please enter email Address';
                $error=1;
            }
            elseif ($this->getAlluser($data['email'])) {
            $data['text_err']= 'Email Already Exit';
            $error=1;
        }
        }
    }

}
