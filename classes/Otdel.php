<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Otdel
 *
 * @author Demon
 */
class Otdel  extends Table{
    //put your code here
    public $otdel_id =0;
    public $name ='';
    public $acive=0;
        public function validate(){
            if (!empty($this->name) &&
            !empty($this->active)) {
            return true;
        }
        return false;
    }
}
