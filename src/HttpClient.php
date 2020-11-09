<?php

/**
 * HttpClient.php
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */

namespace YusufTheDragon\JNE;

use GuzzleHttp\Client;

/**
 * Class HttpClient
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */
class HttpClient
{
    /**
     * Set request data to be sent.
     *
     * @param  array  $requestData
     *
     * @return array
     *
     * @throws \TypeError
     */
    private static function setRequestData(array $requestData) : array
    {
        return array_merge([
            'username' => JNE::$username,
            'api_key' => JNE::$apiKey
        ], $requestData);
    }

    /**
     * Send the request and process the response.
     *
     * @param  string  $apiEndpoint
     * @param  string  $httpMethod
     * @param  array  $requestBody
     *
     * @return string
     *
     * @throws \GuzzleHttp\Exception\ClientException
     */
    public static function sendRequest(string $apiEndpoint, string $httpMethod, array $requestBody = []) : string
    {
        $httpClient = new Client();
        $requestData = self::setRequestData($requestBody);

        $request = $httpClient->request($httpMethod, $apiEndpoint, [
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'form_params' => $requestData
        ]);

        return $request->getBody()->getContents();
    }
}
