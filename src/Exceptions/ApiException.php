<?php

/**
 * ApiException.php
 *
 * @category Class
 * @package  YusufTheDragon\JNE\Exceptions
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */

namespace YusufTheDragon\JNE\Exceptions;

/**
 * Class ApiException
 *
 * @category Class
 * @package  YusufTheDragon\JNE\Exceptions
 *
 * @author   Yusuf Ardi <yusufardi96@gmail.com>
 * @license  https://opensource.org/licenses/GPL-3.0 GPL-3.0-only License
 */
class ApiException extends \Exception
{
    /**
     * Create new instance of ApiException.
     *
     * @param  string  $message
     * @param  string  $code
     */
    public function __construct(string $message, string $code)
    {
        if (!$message) {
            throw new $this('Unknown ' . get_class($this));
        }

        parent::__construct($message, $code);
    }
}
