<?php
$love = "I love php,I Also Love php too much";

echo strstr($love,'php',true);//if true this will return before php,if false this will return after php : default is false

echo strstr($love,'php',true);// same the previous function


echo strchr($love,'php'); //search from last of the string

echo stristr($love,'php'); //case insensitive 


echo strpbrk($love, 'o');

?>