<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:07
 */

namespace FormBuilderBundle\Controller\FormBuilder\Element;


class Input extends Element
{
    public function __construct($data)
    {
        parent::__construct($data);

        // установка разрешенных параметров
        $this->setParametersPermitted([
            'name', 'placeholder', 'class', 'style', 'value', 'type',
            'autofocus', 'autocomplete', 'max', 'min', 'maxlength', 
            'minlength', 'id'
        ]);
    }
}
