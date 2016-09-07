<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Http\Request;

use Xvideos\Entities\Video;
use Xvideos\Http\Requests;

class VotesController extends Controller
{
    public function submit($id)
    {
        //dd('Votando por el ticket '. $id);
        $video = Video::findOrFail($id);
        // si el video existe con findOrFail
        currentUser()->vote($video);
        // este metodo vote esta implementado en el modelo de usuario
        return redirect()->back();
    }
    public function destroy($id)
    {
        /*
         * Metodo para quitar el voto
         */
        //dd('Quitando el voto por el video '. $id);
        $video = Video::findOrFail($id);
        currentUser()->unvote($video);
        // metddo unvote definido en el modelo de usuario
        return redirect()->back();
    }
}
