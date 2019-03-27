<?php

// Example usage (Change user, pass)
require('easycrown.php');

$crown = new Crown('mycrownrpc','mypassword','54.33.83.156','9341');

$getinfo = $crown->getinfo();

print_r($getinfo);
 
?>