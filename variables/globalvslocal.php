<?php
$test = 'unglobal';
setGlobal();
echo $test;

function setGlobal()
{
global $test;
echo "value in function get by global:".$test;
echo "<br />";
$test = 'global';
}

setGlobal2();
$test2 = 'unglobal2';
echo $test2;

function setGlobal2()
{
    global $test2;
    $test2 = 'global';
}