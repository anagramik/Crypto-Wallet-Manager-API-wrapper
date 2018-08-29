# SetUp

You need to pass **URL** and **Token** to CMS class constructor


## Methods

- [Display all Accounts](#display-all-clients)
- [Get Account by ID](#display-ccount-by-id)
- [Create an Account](#create-an-account)
- [Delete an Account](#delete-an-account)
- [Activates 2FA for a given Account](#activetes-2fa-for-a-given-account)
- [Creates a new Address for a given Account](#creates-a-new-address-for-a-given-ccount)
- [Creates a new Transaction for a given Account](#creates-a-new-transaction-for-a-given-ccount)
- [Moves an amount from one Account to another](#moves-an-amount-from-one-account-to-another)

#### Display all Accounts
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
    
    /**
     * Display all clients
     *
     * @return mixed 
     */
    public function getItAll()
    {
        return (new CWM($this->url, $this->token))->getAccounts();        
    }   
}
```

#### Display Account by ID
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * 
     * @return mixed 
     */
    public function get($accountId)
    {
        return (new CWM($this->url, $this->token))->getById($accountId);        
    }   
}
```

#### Create an Account
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
    
    /**
     * Display specific Account
     *
     * @param $data
     * 
     * @return mixed 
     */
    public function create($data)
    {
        return (new CWM($this->url, $this->token))->create($data);        
    }   
}
```

#### Delete an Account
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * 
     * @return mixed 
     */
    public function delete($accountId)
    {
        return (new CWM($this->url, $this->token))->delete($accountId);        
    }   
}
```

#### Activates 2FA for a given Account
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * @param $data
     * 
     * @return mixed 
     */
    public function activate2FA($accountId, $data)
    {
        return (new CWM($this->url, $this->token))->activate2FA($accountId, $data);        
    }   
}
```

#### Creates a new Address for a given Account
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * @param $data
     * 
     * @return mixed 
     */
    public function newAddress($accountId, $data)
    {
        return (new CWM($this->url, $this->token))->newAddress($accountId, $data);        
    }   
}
```

#### Creates a new Transaction for a given Account
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * @param $addressId
     * @param $data
     * 
     * @return mixed 
     */
    public function sendToAddress($accountId, $addressId, $data)
    {
        return (new CWM($this->url, $this->token))->sendToAddress($accountId, $addressId, $data);        
    }   
}
```

#### Moves an amount from one Account to another
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
    
    /**
     * Display specific Account
     *
     * @param $accountId
     * @param $addressId
     * @param $data
     * 
     * @return mixed 
     */
    public function move($accountId, $destinationId, $data)
    {
        return (new CWM($this->url, $this->token))->move($accountId, $destinationId, $data);        
    }   
}
```