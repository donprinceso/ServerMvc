<?php
 use Illuminate\Database\Capsule\Manager as Capsule;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author ServerLand
 */
$capsule = new Capsule();
$capsule->addConnection([
    'driver'=>'mysql',
    'host'=>db_host,
    'username'=>db_user,
    'password'=>db_password,
    'database'=>db_name,
    'charset'=>'utf8',
    'collation'=>'utf8_inicode_ci',
    'prifix'=>''
]);

 $capsule->bootEloquent();
