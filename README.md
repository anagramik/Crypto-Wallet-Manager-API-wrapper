# SetUp

You need to pass **URL** and **Token** to CMS class constructor

```php
<?php

use DogeDev\CryptoWalletManager\CWM;

class Example 
{
    protected $url;
    protected $token;
    
    public function __construct($url, $token) 
    {
        $this->url = $url;    
        $this->token = $token;    
    }
    
    public function getItAll()
    {
        return (new CWM($this->url, $this->token))->getAccounts();        
    }   
}
```