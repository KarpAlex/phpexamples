<?php

echo "unset var:";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = '';
echo "'':";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = 0;
echo "$x:";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = null;
echo "null:";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = '0';
echo "'$x':";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = false;
echo "false:";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);

echo '<br />';
echo '<br />';

$x = array();
echo "empty array array():";
echo '<br />!isset '.!isset($x);
echo '<br />empty '.empty($x);
echo '<br />is_null '.is_null($x);