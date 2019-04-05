<?php

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
class Database {
    private $dbh;
    private $stmt;
    private $error;
    
    public function __construct() {
        $dsn='mysql:host='.db_host.';dbname='.db_name;
        $options=array(
        PDO::ATTR_PERSISTENT => TRUE,
        PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION
        );
        
        try {
            $this->dbh= new PDO($dsn, db_user,db_password,$options);
        } catch (PDOException $ex) {
            $this->error=$ex->getMessage();
            die($this->error);
        }
    }
    
    // getting the database query
    
     public function query($sql)
    {
        $this->stmt = $this->dbh->prepare($sql);
    }
    
    // setting the bind params in an array unit
    
    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    // execute the PDO action
    
    public function execute()
    {
        return $this->stmt->execute();
    }

    //fetch all the database table
    
    public function resultSet()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    public function rowCount()
    {
        return $this->stmt->rowCount();
    }
    
}
