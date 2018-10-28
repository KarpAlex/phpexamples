<?php
function unsetglobal()
{
    global $test;
    unset($test);
}

$test = 1;
unsetglobal();
echo "after unset in function:".$test;
unset($test);
echo "<br />after unset:".$test;