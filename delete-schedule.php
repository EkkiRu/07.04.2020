<?php
require_once 'secure.php';
if (!Helper::can('admin') && !Helper::can('manager')) {
    header('Location: 404.php');
    exit();
    }
$id = Helper::clearInt($_GET['id']);
$idTeacher = Helper::clearInt($_GET['idTeacher']);
(new ScheduleMap())->delete($id);
header('Location: list-schedule.php?id='.$idTeacher);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

