<?php
include 'my_functions.php';
function double($alias)
{
    $alias = $alias * 2;
    return $alias;
}
$val = 10;
$dval = double($val);
echo "Value = $val Doubled = $dval\n";
