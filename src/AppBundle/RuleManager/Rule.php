<?php
/**
 * Created by PhpStorm.
 * User: FOUED
 * Date: 24/02/2017
 * Time: 23:30
 */

namespace AppBundle\RuleManager;


interface Rule
{
    public function apply($value);

}