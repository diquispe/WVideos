<?php

namespace Xvideos\Entities;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Anuncio extends Model
{
    //
    protected $fillable =  ['title', 'status', 'url', 'imagen', 'descripcion', 'posicion', 'pais', 'idioma'];

    //mutador para cambiar el nombre del archivo de imagen subido

    public function setImagenAttribute ($imagen) {
        $this->attributes['imagen'] = Carbon::now()->second.$imagen->getClientOriginalName();
        $name = Carbon::now()->second.$imagen->getClientOriginalName();
        Storage::disk('local2')->put($name, \File::get($imagen));
    }

}
