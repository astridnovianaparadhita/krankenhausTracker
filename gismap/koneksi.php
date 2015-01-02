<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$host='localhost'; 
$username='root'; 
$password=''; 
$database='gis'; 
$connect=mysql_connect($host,$username,$password); 
mysql_select_db($database,$connect);