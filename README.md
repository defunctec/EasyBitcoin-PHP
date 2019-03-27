EasyCrown-PHP
===============

A simple class for making calls to Crown's API using PHP.

Getting Started
---------------
1. Include easybitcoin.php into your PHP script:

    ```php
    require('easycrown.php');
    ```
2. Initialize Crown RPC client connection:

    ```php
    $crown = new Crown('RPCUSER','RPCPASS');
    ```

    Optionally if the above does not work, try this.

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
    
    $crown->getrawtransaction('0e3e2357e806b6cdb1f70b54c3a3a17b6714ee1f0e68bebb44a74b1efd512098',1);
    
    $crown->getblock('000000000019d6689c085ae165831e934ff763ae46a2a6c172b3f1b60a8ce26f');
    ```

Additional Info
---------------
* When a call fails for any reason, it will return false and put the error message in `$crown->error`

* The HTTP status code can be found in $crown->status and will either be a valid HTTP status code or will be 0 if cURL was unable to connect.

* The full response (not usually needed) is stored in `$crown->response` while the raw JSON is stored in `$crown->raw_response`
