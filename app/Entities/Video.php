<?php

namespace Xvideos\Entities;

//use Illuminate\Database\Eloquent\Model;

class Video extends Entity
{

    protected $fillable = ['title', 'url', 'descripcion', 'id_video', 'category_id'];

    public function author()
    {
        // un video pertenece a un usuario y le colocamos author al metodo
        return $this->belongsTo(User::getClass(), 'user_id');
    }

    public function comentarios()
    {
        // un video tiene varios comentarios
        return $this->hasMany(VideoComment::getClass());
    }

    public function votantes()
    {
        // estamos obteniendo los votantes de dicho video
        return $this->belongsToMany(User::getClass(), 'video_votes')->withTimestamps();
        // en la tabla  video_votes estan alamcenados los votos de los usuarios
        // se usa normalmete una tabla que sirva de intermediaria para las tablas que se estan relacionando
    }

    public function categories()
    {
        // un video pertenece a una categoria
        return $this->belongsTo(Category::getClass());
    }


    public function getOpenAttribute()
    {
        return $this->status== 'open';
    }

}
