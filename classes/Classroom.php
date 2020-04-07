<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Classroom
 *
 * @author Demon
 */
class Classroom  extends Table{
    //put your code here
    var $classroom_id ='';
    var $name ='';
        public function validate(){
        return false;
    }
}
