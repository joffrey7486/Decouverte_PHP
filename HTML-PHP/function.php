<?php

function checkbox (string $name, string $value, array $data): string
{
    $attributes = "";
    if (isset($data[$name]) && in_array($value, $data[$name])){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="checkbox" name="{$name}[]" value="$value" $attributes>
HTML;
};

function radio (string $name, string $value, array $data): string
{
    $attributes = "";
    if (isset($data[$name]) && $value === $data[$name]){
        $attributes .= 'checked';
    }
    return <<<HTML
    <input type="radio" name="{$name}" value="$value" $attributes>
HTML;
};