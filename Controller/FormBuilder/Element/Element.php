<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:07
 */

namespace FormBuilderBundle\Controller\FormBuilder\Element;


abstract class Element
{
    protected $_parameters = [];
    protected $_data;

    public function __construct($data)
    {
        $this->_data = $data;
    }

    protected function getParametersPermitted()
    {
        return $this->_parameters;
    }

    protected function setParametersPermitted($parameters)
    {
        $this->_parameters = $parameters;
    }

    protected function generateLine($data)
    {
        $line = "<input";
        foreach ($data as $item => $value) {
            if(array_search($item, $this->_parameters)) {
                $line .= ' ' . $item . '="' . $value . '"';
            }
        }
        $line .= ">";

        return $line;
    }

    public function getResult()
    {
        return $this->generateLine($this->_data);
    }
}