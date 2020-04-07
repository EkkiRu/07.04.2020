<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Special
 *
 * @author Demon
 */
class Special extends Table {
    //put your code here
    var $special_id ='';
    var $name ='';
    var $otdel_id ='';
        public function validate(){
        return false;
    }
}
