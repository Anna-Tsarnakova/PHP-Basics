<?php
//http://www.w3schools.com/php/php_form_url_email.asp
//http://www.w3schools.com/php/func_filter_var.asp
//http://www.w3schools.com/php/php_ref_filter.asp

$inputString = $_GET["text"];

$pattern = '/\w+/';
$options = array("options" => array("regexp" => $pattern));
$isMatch = filter_var($inputString, FILTER_VALIDATE_REGEXP, $options);
preg_match_all($pattern, $inputString, $inputArray);
//preg_match($pattern, $inputString, $inputArray);
//$inputString = preg_replace($pattern, 'Da', $inputString);

var_dump($inputString);
var_dump($isMatch);
var_dump($inputArray);

foreach ($inputArray[0] as $inputWord)
{
    echo "<div>".$inputWord."</div>"."\n";
}