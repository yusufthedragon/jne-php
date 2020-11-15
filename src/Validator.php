<?php

/**
 * Validator.php
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */

namespace YusufTheDragon\JNE;

/**
 * Class Validator
 *
 * @category Class
 * @package  YusufTheDragon\JNE
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */
class Validator
{
    /**
     * Check if required parameters are exist.
     *
     * @param  array  $parameters
     * @param  array  $requiredParameters
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public static function validateParams(array $requiredParameters, array $parameters) : void
    {
        foreach ($requiredParameters as $requiredParameter) {
            if (!isset($parameters[$requiredParameter])) {
                throw new \InvalidArgumentException("Parameter ${requiredParameter} is missing.");
            }
        }
    }

    /**
     * Check if response from JNE is valid.
     *
     * @param  object  $response
     *
     * @return bool
     *
     * @throws \InvalidArgumentException
     */
    public static function validateResponse(object $response) : bool
    {
        if (isset($response->status) && ($response->status === 'Error' || $response->status === 'false' || $response->status === false)) {
            return false;
        }

        return true;
    }
}
