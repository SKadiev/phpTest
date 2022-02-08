<?php

namespace App\Classes;

interface Validator
{

    public function validate($data):bool;
}