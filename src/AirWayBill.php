<?php

/**
 * AirWayBill.php
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */

namespace YusufTheDragon\JNE;

use YusufTheDragon\JNE\Exceptions\ApiException;

/**
 * Class AirWayBill
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */
class AirWayBill
{
    /**
     * Instantiate required parameters for Register AirWayBill.
     *
     * @var array
     */
    const REQUIRED_PARAMETERS = ['ORDER_ID', 'AWB_NUMBER'];

    /**
     * Register retail airwaybill.
     *
     * @param  array  $parameters
     *
     * @return object
     *
     * @throws \ArgumentCountError
     * @throws ApiException
     */
    public static function register(array $parameters) : object
    {
        Validator::validateParams(self::REQUIRED_PARAMETERS, $parameters);
        
        $apiEndpoint = JNE::$apiKey . '/cnoteretails';
        $sendRequest = HttpClient::sendRequest($apiEndpoint, 'POST', $parameters);
        $response = json_decode($sendRequest);

        if ($response->error) {
            throw new ApiException($response->error, 500);
        }

        return $response;
    }
}
