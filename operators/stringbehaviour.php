<?php
//adding strings - 0
$a = "this is first string" + "this is second string";
echo "<br />".$a;

//multiply string with number - 0
$a = 40 * "heheheeh";
echo "<br />".$a;

//multiply (partly) numeric string with number - strip string and multiply numbers
$a = 40 * "10 heheheeh";
echo "<br />".$a;

//multiply (partly) numeric string with number - strip string and multiply number if number first in string
$a = 40 * "10 hehe 5 heeh";
echo "<br />".$a;

//multiply (partly) numeric string with number - strip string and multiply number if number first in string
$a = 40 * "hehe 5 heeh";
echo "<br />".$a;

//same with addition
$a = 40 + "10 hehe 5 heeh";
echo "<br />".$a;

//
$a = 'pho' + 1;
echo '<br />'.$a;

//
$a = 'pho';
echo '<br />'.$a++;

$a = 'pho';
echo '<br />'.++$a;

$a = "pho";
echo "<br />".++$a;

$a = "z";
echo "<br />".++$a;

$a = "a";
echo "<br />".++$a;

$a = ".";
echo "<br />".++$a;

$a = "_";
echo "<br />".++$a;