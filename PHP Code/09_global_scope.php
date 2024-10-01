<?php
function dozap()
{
    global $val;
    $val = 100;
}

$val = 10;
dozap();
echo "DoZap = $val\n";
