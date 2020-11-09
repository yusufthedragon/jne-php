<?php

/**
 * JNE.php
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */

namespace YusufTheDragon\JNE;

/**
 * Class JNE
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */
class JNE
{
    /**
     * Username obtained from JNE.
     *
     * @var string
     */
    public static $username;

    /**
     * API Key obtained from JNE.
     *
     * @var string
     */
    public static $apiKey;

    /**
     * Base URL for API Endpoint.
     *
     * @var string
     */
    public static $baseUrl = 'http://apiv2.jne.co.id:10102';

    /**
     * Set the API Username.
     *
     * @param  string  $username
     *
     * @return self
     *
     * @throws \ArgumentCountError
     */
    public static function setUsername(string $username) : self
    {
        self::$username = $username;

        return new self();
    }

    /**
     * Set the API Key.
     *
     * @param  string  $apiKey
     *
     * @return self
     *
     * @throws \ArgumentCountError
     */
    public static function setApiKey(string $apiKey) : self
    {
        self::$apiKey = $apiKey;

        return new self();
    }

    /**
     * Set API Endpoint to Production.
     *
     * @param  bool  $value
     *
     * @return void
     */
    public static function setProductionMode(bool $value = true) : void
    {
        if ($value) {
            self::$baseUrl = 'http://apiv2.jne.co.id:10101';
        }
    }
}
