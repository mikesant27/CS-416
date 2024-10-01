<?php
include 'my_functions.php';
function howdy($lang = 'es')
{
    if ($lang == 'es') return "Hola";
    if ($lang == 'fr') return "Bonjour";
    return "Hello";
}

print howdy() . " Glenn\n" . newLine();
print howdy('fr') . " Sally\n";
