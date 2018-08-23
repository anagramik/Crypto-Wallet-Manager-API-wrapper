<?php

namespace DogeDev\CryptoWalletManager;

use GuzzleHttp\Client;

class CWM
{

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => env('CWM_URL') . env('CWM_API'),
            'timeout'  => 2.0,
        ]);
    }

    /**
     * Display all clients
     *
     * @return mixed
     */
    public function getAccounts()
    {
        try {
            return $this->client->request('GET', '/accounts', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
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
    public function show($accountId)
    {
        try {
            return $this->client->request("GET", "/accounts/$accountId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
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
            return $this->client->request("POST", "/accounts", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
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
            return $this->client->request("DELETE", "/accounts/$accountId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
                    'Content-Type'  => 'application/json',
                ],
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }

    /**
     * Activetes 2FA for a given Account
     *
     * @param $accountId
     * @param $data
     *
     * @return mixed
     */
    public function activate2FA($accountId, $data)
    {
        try {
            return $this->client->request("POST", "/accounts/$accountId/activate-2fa", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
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
            return $this->client->request("POST", "/accounts/$accountId/new-address", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
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
            return $this->client->request("POST", "/accounts/$accountId/send-to/$addressId", [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('CWM_TOKEN'),
                    'Content-Type'  => 'application/json',
                ],
                'json'    => $data,
            ]);
        } catch (\Exception $e) {
            $response = $e;
        }

        return json_decode($response->getBody()->getContents());
    }
}
