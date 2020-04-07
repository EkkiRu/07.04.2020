<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Subject
 *
 * @author Demon
 */
class Subject  extends Table{
    //put your code here
    public $subject_id ='';
    public $name ='';
    public $otdel_id ='';
    public $hours ='';
        public function validate(){
        return false;
    }
}
