<?php

namespace App\Classes;

class JsonFormat implements Formater
{
    public function format( $data)
    {
        return json_encode(get_object_vars($data));
    }
}