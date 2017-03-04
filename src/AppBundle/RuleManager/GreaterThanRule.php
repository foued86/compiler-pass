<?php
/**
 * Created by PhpStorm.
 * User: FOUED
 * Date: 24/02/2017
 * Time: 23:44
 */

namespace AppBundle\RuleManager;


class GreaterThanRule implements Rule
{
    public function apply($value)
    {
        return $value > 4000;
    }
}