<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author Demon
 */
class User extends Table  {
    
    public $user_id ='';
    public $lastName ='';
    public $firstname ='';
    public $patronomic ='';
    public $login ='';
    public $pass ='';
    public $gender_id ='';
    public $birthday ='';
    public $role_id ='';
    //put your code here
    public function validate(){
        return false;
    }
}
