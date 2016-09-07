<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\Video;
use Xvideos\Entities\VideoComment;
use Xvideos\Http\Requests;

class CommentsController extends Controller
{
   public function submit($id, Request $request, Guard $auth)
    {
        $this->validate($request, [
            'comment' => 'required|max:250',
        ]);

        $comment = new VideoComment($request->only(['comment']));
        $comment->user_id = $auth->id();

        $video = Video::findOrFail($id);
        $video->comentarios()->save($comment);

        session()->flash('success', 'Tu comentario fue agregado correctamente');

        return redirect()->back();

    }
}
