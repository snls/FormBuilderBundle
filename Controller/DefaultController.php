<?php

namespace FormBuilderBundle\Controller;

use FormBuilderBundle\Controller\FormBuilder\Element\Form;
use FormBuilderBundle\Controller\FormBuilder\Element\Input;
use FormBuilderBundle\Controller\FormBuilder\Element\Select;
use FormBuilderBundle\Controller\FormBuilder\FormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/form_builder")
     */
    public function indexAction()
    {
        $result = FormBuilder::create();
        $result->addStartForm(new Form([
            'name' => 'form',
            'method' => 'get'
        ]));
        $result->addElement(new Input([
            'name' => 'text',
            'placeholder' => 'Input text value',
            'type' => 'text'
        ]));
        $result->addElement(new Input([
            'name' => 'password',
            'placeholder' => 'Input password value',
            'type' => 'password'
        ]));
        $result->addElement(new Select([
            'select' => [
                'name' => 'select'
            ],
            'options' => [
                ['text' => 'Список', 'value' => ''],
                ['text' => 'Первый элемент', 'value' => '1', 'selected' => 'selected'],
                ['text' => 'Второй элемент', 'value' => '2'],
                ['text' => 'Третий элемент', 'value' => '3', 'disabled' => 'disabled'],
            ]
        ]));
        $result->addElement(new Input([
            'name' => 'save',
            'value' => 'Save',
            'type' => 'submit'
        ]));
        return $this->render('FormBuilderBundle:Default:index.html.twig', ['result' => $result->getResult()]);
    }
}
