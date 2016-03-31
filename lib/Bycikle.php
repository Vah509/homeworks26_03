<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 31.03.2016
 * Time: 23:25
 */


class Bycikle extends Vehicle
{
    public function go_To($place)
    {
        parent::go_To($place);
        echo 'Going by Bycikle to '. $place;

    }

}