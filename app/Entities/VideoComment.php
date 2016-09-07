<?php

namespace Xvideos\Entities;

use Illuminate\Database\Eloquent\Model;

class VideoComment extends Entity
{
    protected $fillable = ['comment'];
    //campos a ser enviados
    
    public function videos()
    {
        // un comentario pertenece a un video
        return $this->belongsTo(Video::getClass());
    }

    public function user()
    {
        //un comentario peryenece a un usuario
        return $this->belongsTo(User::getClass());
    }
}
