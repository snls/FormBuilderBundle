<?php
/**
 * Created by PhpStorm.
 * User: lookyalba
 * Date: 14.08.16
 * Time: 18:07
 */

namespace FormBuilderBundle\Controller\FormBuilder\Element;


class Select extends Element
{
    public function __construct($data)
    {
        parent::__construct($data);

        // установка разрешенных параметров
        $this->setParametersPermitted([
            'select' => [
                'name', 'class', 'style', 'id', 'multiple'
            ],
            'option' => [
                'value', 'disabled', 'selected'
            ]
        ]);
    }

    protected function generateLine($data)
    {
        if(is_array($data) and is_array($data['select']) and is_array($data['options'])) {
            $line = '<select';

            foreach ($data['select'] as $item => $value) {
                if (array_search($item, $this->_parameters['select'])) {
                    $line .= ' ' . $item . '="' . $value . '"';
                }
            }

            $line .= '>';

            foreach ($data['options'] as $values) {
                $line .= '<option';
                foreach ($values as $item => $value) {
                    if (array_search($item, $this->_parameters['option'])) {
                        $line .= ' ' . $item . '="' . $value . '"';
                    }
                }
                $line .= '>';
                $line .= !empty($values['text']) ? $values['text'] : 'не указано';
                $line .= '</option>';
            }

            $line .= '</select>';

            return $line;
        }
    }
}
