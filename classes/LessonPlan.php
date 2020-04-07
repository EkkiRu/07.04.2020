<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LessonPlan
 *
 * @author Demon
 */
class LessonPlan  extends Table{
    //put your code here
    var $lesson_plan_id ='';
    var $gruppa_id ='';
    var $subject_id ='';
    var $user_id ='';
        public function validate(){
        return false;
    }
}
