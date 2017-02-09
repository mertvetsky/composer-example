<?php
/**
 * Created by PhpStorm.
 * User: Alexandr Sayapin
 * Date: 09.02.17
 * Time: 14:44
 */

namespace Mertvetsky\ComposerExample;

use Mertvetsky\ComposerExample\someDir\StringBuilder;


/**
 * Class MyClass
 * @package Mertvetsky\ComposerExample
 */
class MyClass
{
    public function hello()
    {
        $builder = new StringBuilder();
        dump($builder->getString());
    }
}