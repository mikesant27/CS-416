<?php
include 'my_functions.php';
function triple(&$realthing)
{
    $realthing = $realthing * 3;
}

$val = 10;
triple($val);
echo "Triple = $val\n";
