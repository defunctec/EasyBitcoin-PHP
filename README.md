EasyCrown-PHP
===============

A simple class for making calls to Crown's API using PHP.

Instructions
---------------

1. Include easycrown.php into your PHP script:

    ```php
    require('easycrown.php');
    ```
2. Initialize Crown RPC client connection:

    ```php
    $crown = new Crown('RPCUSER','RPCPASS','RPCCLIENTIP','9341');
    ```

    If you wish to make an SSL connection you can set an optional CA certificate or leave blank
    ```php
    $crown->setSSL('/full/path/to/mycertificate.cert');
    ````

3. Make calls to crownd as methods for your object. Examples:

    ```php
    $crown->getinfo();
    
    $crown->getrawtransaction($getblock["tx"]["0"]);
    
    ```
4. Example getinfo.php showing simple getinfo response

   ```
   <?php
    
   require('easycrown.php');

   $crown = new Crown('RPCUSER','RPCPASS','RPCCLIENTIP','9341');

   $getinfo = $crown->getinfo();

   print_r($getinfo);
    
   ?>
```

Additional Info
---------------
* When a call fails for any reason, it will return false and put the error message in `$crown->error`

* The HTTP status code can be found in $crown->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in `$crown->response` while the raw JSON is stored in `$crown->raw_response`
