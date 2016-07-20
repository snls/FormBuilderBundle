<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:06
 */

namespace FormBuilderBundle\Controller\FormBuilder;


/**
 * Директор для паттерна Builder
 *
 * Class FormBuilder
 * @package FormBuilderBundle\Controller\FormBuilder
 */
class FormBuilder
{
    public static function create()
    {
        return new FormElementBuilder();
    }
}