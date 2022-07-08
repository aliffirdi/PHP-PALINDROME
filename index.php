<?php
require 'palindrome.class.php';
use Github\aliffirdi\palindrome;

// Initialing class
$isPalindrome = new palindrome();

// return TRUE
var_dump($isPalindrome->checkv1("ada"));
var_dump($isPalindrome->checkv2("ada"));
var_dump($isPalindrome->checkv3("ada"));
var_dump($isPalindrome->checkv4("ada"));
var_dump($isPalindrome->checkv5("ada"));
// return FALSE
var_dump($isPalindrome->checkv1("kepo"));
var_dump($isPalindrome->checkv2("kepo"));
var_dump($isPalindrome->checkv3("kepo"));
var_dump($isPalindrome->checkv4("kepo"));
var_dump($isPalindrome->checkv5("kepo"));