# SetUp

You need to pass **URL** and **Token** to CMS class constructor

```php
<?php

use DogeDev\CryptoWalletManager\CWM;

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
        return (new CWM($this->url, $this->token))->getAccounts();        
    }   
}
```