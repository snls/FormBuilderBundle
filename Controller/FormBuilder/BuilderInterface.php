<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:13
 */

namespace FormBuilderBundle\Controller\FormBuilder;


use FormBuilderBundle\Controller\FormBuilder\Element\Element;
use FormBuilderBundle\Controller\FormBuilder\Element\Form;

interface BuilderInterface
{
    /**
     * Добавляет начало формы
     *
     * @param $form
     * @return mixed
     */
    public function addStartForm(Element $form);

    /**
     * Добавляет элемент формы
     *
     * @param $element
     * @return mixed
     */
    public function addElement(Element $element);

    /**
     * Получаем результат постройки формы
     *
     * @return mixed
     */
    public function getResult();
}