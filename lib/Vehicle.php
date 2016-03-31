<?php
/**
 * Created by PhpStorm.
 * User: VAHTANG
 * Date: 31.03.2016
 * Time: 22:25
 */

interface Movable
{
    public function go_To($place);
}


class Vehicle implements Movable
{
    public function go_To($place)
    {
        // TODO: Implement goTo() method.
        if ( ! isset($place)) {
            throw new Exception ('Error: argument '. __FUNCTION__ . ' is not defined or NULL');
        }
        if ( ! is_string ($place)){
            throw new Exception('Error: argument '. __FUNCTION__ . 'is not string');
        }
        return $place;

        try {
        }
        catch (Exception $e  ) {
            echo $e->getMessage(). "<br>";
        }
    }

}