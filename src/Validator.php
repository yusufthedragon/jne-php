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
            if (!in_array($requiredParameter, array_flip($parameters))) {
                throw new \InvalidArgumentException("Parameter ${requiredParameter} is missing.");
            }
        }
    }
}
