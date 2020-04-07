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
    
    var $user_id ='';
    var $lastName ='';
    var $firstname ='';
    var $patronomic ='';
    var $login ='';
    var $pass ='';
    var $gender_id ='';
    var $birthday ='';
    var $role_id ='';
    //put your code here
    public function validate(){
        return false;
    }
}
