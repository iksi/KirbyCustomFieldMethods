<?php

/**
 * Return the hostname for a url
 * @param Field $field The calling Kirby Field instance
 * @return Field
 */
field::$methods['host'] = function($field) {
    $field->value = parse_url($field->value, PHP_URL_HOST);
    return $field;
};
