<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 9/03/2016
 * Time: 21:11
 */

namespace Xvideos\Entities;


use Illuminate\Database\Eloquent\Model;

class Entity extends Model

{
    public static function getClass()
    {
        // esto se crea para tener soporte php 5.4
        return get_class(new static);
    }


}