<?php

namespace DogeDev\CryptoWalletManager;

use GuzzleHttp\Client;

class CWM {

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('CWM_IP') .  env('CWM_API'),
            'timeout'  => 2.0,
            'headers'  => [
                'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
                'Accept'        => 'application/json',
            ]
        ]);
    }

    /**
     * Display all clients
     *
     * @return mixed
     */
    public function getAccounts()
    {
        return $this->client->request('GET', '/accounts');
    }

    /**
     * Display specific Account
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function show($accountId) 
    {
        return $this->client->request("GET", "/accounts/$accountId");
    }

    /**
     * Create an Account
     *
     * @param $data
     *
     * @return mixed
     */
    public function create($data)
    {
        return $this->client->request("POST", "/accounts", $data);
    }

    /**
     * Delete specific Account
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function delete($accountId)
    {
        return $this->client->request("DELETE", "/accounts");
    }

    /**
     * Activetes 2FA for a given Account
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function activate2FA($accountId)
    {
        return $this->client->request("POST", "/accounts/$accountId/activate-2fa");
    }

    /**
     * Creates a new address for a given Account
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function newAddress($accountId)
    {
        return $this->client->request("POST", "/accounts/$accountId/new-address");
    }

    /**
     * Creates a new transaction to a given Address
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function sendToAddress($accountId, $addressId)
    {
        return $this->client->request("POST", "/accounts/$accountId/send-to/$addressId");
    }
}
