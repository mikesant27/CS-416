<?php
include 'my_functions.php';
function howdy($lang)
{
    if ($lang == 'es') return "Hola";
    if ($lang == 'fr') return "Bonjour";
    return "Hello";
}

print howdy('es') . " Glenn" . newLine();
print howdy('fr') . " Sally" . newLine();
print howdy('') . " John";
