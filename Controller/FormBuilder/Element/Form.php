<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:07
 */

namespace FormBuilderBundle\Controller\FormBuilder\Element;


class Form extends Element
{
    public function __construct($data)
    {
        parent::__construct($data);

        // установка разрешенных параметров
        $this->setParametersPermitted([
            'name', 'class', 'style', 'method', 'id'
        ]);
    }

    protected function generateLine($data)
    {
        $line = "<form";
        foreach ($data as $item => $value) {
            if(array_search($item, $this->_parameters)) {
                $line .= ' ' . $item . '="' . $value . '"';
            }
        }
        $line .= ">";

        return $line;
    }
}