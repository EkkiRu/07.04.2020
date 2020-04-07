<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Schedule
 *
 * @author Demon
 */
class Schedule  extends Table{
    //put your code here
    var $schedule_id ='';
    var $lesson_plan_id ='';
    var $day_id ='';
    var $lesson_num_id ='';
    var $classroom_id ='';
        public function validate(){
        return false;
    }
}
