<?php
/**
 * Created by PhpStorm.
 * User: FOUED
 * Date: 24/02/2017
 * Time: 23:31
 */
namespace AppBundle\RuleManager;

use AppBundle\RuleManager\Rule;

class IsNumericRule implements Rule
{
    public function apply($value)
    {
        return is_int($value);
    }
}