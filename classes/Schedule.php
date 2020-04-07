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
    public $schedule_id ='';
    public $lesson_plan_id =0;
    public $day_id =0;
    public $lesson_num_id =0;
    public $classroom_id =0;
        public function validate(){
        return false;
    }
}
