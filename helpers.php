<?php

class App
{
    public static function bsText($name, $value = null, $options = [])
    {
        $options['class'] = isset($options['class']) ? $options['class'] . ' form-control' : 'form-control';
        $options['autocomplete'] = isset($options['autocomplete']) ? $options['autocomplete'] . ' off' : 'off';
        $options['id'] = isset($options['id']) ? $options['id'] : $name;

        echo parent::text($name, $value, $options);
    }
}
?>
