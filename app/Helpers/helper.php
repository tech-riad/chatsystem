<?php

namespace App\Helpers;

class Helper
{

    public static function uniqueId()
    {

        return strtoupper(uniqid('USR'));

    }

}
