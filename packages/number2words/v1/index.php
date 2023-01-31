<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//ini_set('error_reporting', E_ALL);

//header('Content-Type: text/html; charset=UTF-8');
require_once "Locality.php";
require_once "Number2Words.php";



function main(array $args) : array
{
 	
 $number = $args["number"] ?? 0;
 
 $language = $args["language"] ?? "EN";

 $output = $args["output"] ?? "text";
 
 $locale = $args["locale"] ?? NULL;
 
 $currency = $args["currency"] ?? "$";
 
 $units = $args["units"] ?? "¢";
 
//$expected = "Mohamed Ali Abbas";
// $expected = $this::curl_Result($number, $language, $locale, $currency, $units, $output);
// $expected = substr($expected, 38);
 //echo $expected;
 //return [
 //       'body' => trim($expected),
 //   ];
		
 $oTextNum = new Number2Words();
 $Number2Words = $oTextNum->translateNumber($number, $language, $currency, $units, $locale, $output);

 return [
        'body' => trim($Number2Words),
    ];

}


?>