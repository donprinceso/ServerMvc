<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Account
 *
 * @author ServerLand
 */
class Account extends Database {
    
    
    public function create(array $data) {
        $query = 'INSERT INTO user (first_name,last_name,email,password,gendre) VALUES (:first_name,:last_name,:email,:password,:gendre)';
        $this->query($query);
        $this->bind(':first_name', $data['first_name']);
        $this->bind(':first_name', $data['first_name']);
        $this->bind(':first_name', $data['first_name']);
        $this->bind(':first_name', $data['first_name']);
        $this->bind(':first_name', $data['first_name']);
        if ($this->execute()) {
            return TRUE;
        }
        return FALSE;
    }

    public function enter() {
        
    }

    public function edit() {
        
    }

    public function delete() {
        
    }

    public function getAlluser() {
        
    }

}
