<?php
/**
 * Created by PhpStorm.
 * User: FOUED
 * Date: 24/02/2017
 * Time: 23:46
 */

namespace AppBundle\RuleManager;


class LessThanRule implements Rule
{
    public function apply($value)
    {
        return $value < 20000;
    }
}