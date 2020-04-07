<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gruppa
 *
 * @author Demon
 */
class Gruppa  extends Table{
    //put your code here
    var $gruppa_id ='';
    var $name ='';
    var $special_id ='';
    var $date_begin ='';
    var $date_end ='';
        public function validate(){
        return false;
    }
}
