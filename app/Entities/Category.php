<?php

namespace Xvideos\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Entity
{
    protected $fillable = ['name', 'imagen'];

    public function setImagenAttribute($imagen)
    {
        $fecha = Carbon::now();
        $fijarnombre = $fecha->year.'-'.$fecha->month.'-'.$fecha->day.'-'.rand(10000, 99999);
        $this->attributes['imagen'] = $fijarnombre;
        $name =  $fijarnombre;
        \Storage::disk('local')->put($name, \File::get($imagen));
    }

    public function videos()
    {
        // un video tiene varios comentarios
        return $this->hasMany(Video::getClass());
    }


}
