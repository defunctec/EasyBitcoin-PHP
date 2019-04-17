<?php

// Example usage (Change user, pass, IP)
require('easycrown.php');

$crown = new Crown('RPCUSER','RPCPASS','RPCCLIENTIP','9341');

$getinfo = $crown->getinfo();

print_r($getinfo);
 
?>