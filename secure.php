<?php
session_start();
require_once 'autoload.php';
if (!isset($_SESSION['role']) || isset($_POST['out'])) {
session_destroy();
header('Location: auth.php');
exit;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

