<?php
require 'palindrome.class.php';
use Github\aliffirdi\palindrome;

// Initialing class
$isPalindrome = new palindrome();

// return TRUE
var_dump($isPalindrome->checkv1("ada"));
var_dump($isPalindrome->checkv2("ada"));
// return FALSE
var_dump($isPalindrome->checkv1("kepo"));
var_dump($isPalindrome->checkv2("kepo"));