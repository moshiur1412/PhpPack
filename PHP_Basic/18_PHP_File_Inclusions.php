<?php
     # Four Types of php file inclusion
     # 1. include
     # 2. include_once
     # 3. require
     # 4. require_once

 include('16_PHP_Loop.php');
 include_once('16_PHP_Loop.php');

 # Still error with comment section
//  require('17_PHP_Loop.php'); // If file missing that wouldn't execute next line 
 echo "This is not worked for file not found";
 require_once('17_PHP_Loop.php');
 echo "don't read this line";

?>