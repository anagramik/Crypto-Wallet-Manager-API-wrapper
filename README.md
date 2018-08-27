# SetUp

You need to pass **URL** and **Token** to CMS class constructor

```php
<?php

use DogeDev\CryptoWalletManager;

class Example 
{
    
    protected $token;
    protected $url;
    
    public function __construct($url, $token) 
    {
        $this->token = $token;    
        $this->url = $url;    
    }
    
    public function getItAll()
    {
        return (new \DogeDev\CryptoWalletManager\CWM($this->url, $this->token))->getAccounts();        
    }   
}
```