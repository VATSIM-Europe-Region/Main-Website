<?php

function array_to_obj(array $array = []) {
    $obj = new stdClass();
    foreach ($array as $key => $val) {
        $obj->$key = is_array($val) ? array_to_obj($val) : $val;
    }
    return $obj;
}