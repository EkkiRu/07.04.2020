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
    public $classroom_id =0;
    public $name ='';
    public $active=0;
        public function validate(){
                    if (!empty($this->name) &&
            !empty($this->active)) {
            return true;
        }
        return false;
    }
}
