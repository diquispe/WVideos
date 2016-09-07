<?php

namespace Xvideos\Entities;

use Illuminate\Database\Eloquent\Model;

class VideoVote extends Entity
{
    public function video()
    {
        // un voto pertenece a un video
        return $this->belongsTo(Video::getClass());
    }

    public function users()
    {
        // un voto pertenece a un usuario
        return $this->belongsTo(User::getClass());
    }
}
