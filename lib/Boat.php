<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 31.03.2016
 * Time: 23:27
 */

class Boat extends Vehicle
{
    public function go_To($place)
    {
        parent::go_To($place);
        echo 'Sailing by Boat to '. $place;

    }

}