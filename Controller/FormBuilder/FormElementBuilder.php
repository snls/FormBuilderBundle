<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:13
 */

namespace FormBuilderBundle\Controller\FormBuilder;


use FormBuilderBundle\Controller\FormBuilder\Element\Element;

class FormElementBuilder implements BuilderInterface
{
    protected $_start;
    protected $_form;
    protected $_end;
    protected $data;

    public function __construct()
    {
        $this->createForm(); // создаем форму
    }

    private function createForm()
    {
        $this->_start = NULL;
        $this->_form = NULL;
        $this->_end = '</form>';
    }

    public function addStartForm(Element $data)
    {
        $this->_start = $data->getResult();
    }

    public function addElement(Element $data)
    {
        $this->_form .= $data->getResult();
    }

    public function getResult()
    {

        return $this->_start.$this->_form.$this->_end;
    }
}