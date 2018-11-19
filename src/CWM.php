<?php

namespace DogeDev\CryptoWalletManager;

use GuzzleHttp\Client;

class CWM
{
    protected $url;
    protected $token;

    public function __construct($url, $token)
    {
        $this->url    = $url;
        $this->token  = $token;
    }

    /**
     * Display all accounts
     *
     * @return mixed
     */
    public function getAccounts()
    {
        try {
            return $this->setClient->request('GET', $this->url . '/accounts', [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Display specific Account
     *
     * @param $accountId
     *
     * @return mixed
     */
    public function getById($accountId)
    {
        try {
            return $this->setClient->request("GET", $this->url . "/accounts/$accountId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
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
        try {
            return $this->setClient->request("POST", $this->url . "/accounts", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
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
        try {
            return $this->setClient->request("DELETE", $this->url . "/accounts/$accountId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Activates 2FA for a given Account
     *
     * @param $accountId
     * @param $data
     *
     * @return mixed
     */
    public function activate2FA($accountId, $data)
    {
        try {
            return $this->setClient->request("POST", $this->url . "/accounts/$accountId/activate-2fa", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Creates a new address for a given Account
     *
     * @param $accountId
     * @param $data
     *
     * @return mixed
     */
    public function newAddress($accountId, $data)
    {
        try {
            return $this->setClient->request("POST", $this->url . "/accounts/$accountId/new-address", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Creates a new transaction to a given Address
     *
     * @param $accountId
     * @param $addressId
     * @param $data
     *
     * @return mixed
     */
    public function sendToAddress($accountId, $addressId, $data)
    {
        try {
            return $this->setClient->request("POST", $this->url . "/accounts/$accountId/send-to/$addressId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Moves an amount from one account to another
     *
     * @param $accountId
     * @param $destinationId
     * @param $data
     *
     * @return mixed
     */
    public function move($accountId, $destinationId, $data)
    {
        try {
            return $this->setClient->request("POST", $this->url . "/accounts/$accountId/move-to/$destinationId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . $this->token,
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Setup a new Client instance
     *
     * @return Client
     */
    private function setClient() 
    {
        return new Client([
            'base_uri' => $url,
            'timeout'  => 2.0,
        ]);
    }
}
