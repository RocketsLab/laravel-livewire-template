<?php


namespace App\Validators;

/**
 * Interface Validator
 * @package App\Validators
 */
abstract class Validator
{
    protected static $ignores = [];

    public static function setIgnore(array $params = [])
    {
        self::$ignores = $params;
    }

    public static function getIgnore($key)
    {
        if(!in_array($key, array_keys(self::$ignores))) {
            return null;
        }

        return self::$ignores[$key];
    }

    /**
     * @return array
     */
    abstract public static function rules(): array ;

    /**
     * @return array
     */
    abstract public static function messages(): array ;
}
