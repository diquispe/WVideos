<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\Anuncio;
use Xvideos\Entities\Category;
use Xvideos\Entities\Chica;
use Xvideos\Entities\Video;
use Xvideos\Entities\VideoComment;
use Xvideos\Http\Requests;
use Xvideos\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideosController extends Controller
{




    public function latest()
    {
        $videos = Video::orderBy('created_at', 'DESC')->with('author')->with('comentarios')->paginate(24);
        $chicas = Chica::orderBy('created_at', 'DESC');
        $categorias = Category::orderBy('created_at', 'DESC');
        $anuncios = Anuncio::all();
        
        return view('videos.lista', compact('videos', 'chicas', 'categorias','anuncios'));
    }

    
    public function videosadmin()
    {
        $videos = Video::orderBy('created_at', 'DESC')->paginate(24);

        return view('dashboard.videos.lista', compact('videos'));
    }
    
    public function popular()
    {
        //relacionados con los videos mas votados
        return view('videos.popular');
    }
    public function details($id, Guard $auth)
    {
        $video = Video::findOrFail($id);
        //$comments = VideoComment::('video_id', $id)->paginate(5);
        /* $comments = VideoComment::select('video_comments.*', 'users.name')
            ->join('users', 'video_comments.user_id', '=', 'users.id')
            ->where('video_id', $id)
            ->paginate(); */
        $user = $auth->user();
        /*
         * cuando se asigna algo a la variable user hace que cuando en la vista de details nos diga que determinada variable no este defnida
         * la definamos correctamente
         */
        return view('videos.video', compact('video', 'user'));
        //dd($video->comments);
    }



    public function categoria($id)
    {
        $categoria = Category::findOrFail($id);
        //dd($categoria);
        return view('videos.categoria', compact('categoria'));
        //dd($video->comments);
    }



    public function listado()
    {

        $categorias = Category::orderBy('created_at', 'DESC')->paginate(24);

        //return view('videos
        //
        //
        //
        //
        //
        //.list', compact('videos'));

        //$video = Video::findOrFail($id);
        return view('videos.categoria.listado', compact('categorias'));
        //dd($video->comments);
    }
    public function create()
    {
        return view('videos.create', compact('video'));
    }
    public function store(Request $request, Guard $auth)
    {
        // usando el inyector de dependencias Guard $auth
        // al enviar el formulario se enviar una solicitud del tipo POST con los datos enviados
        //dd($request->all());

        //validar datos

        $this->validate($request, [
            'title' => 'required|max:120',
            'url' => 'required|max:120',
            'id_video' => 'required|max:8',
            'descripcion' => 'required|max:400',
        ]);

        $video = $auth->user()->videos()->create([
            'title'         => $request->get('title'),
            'url'           => $request->get('url'),
            'descripcion'   => $request->get('descripcion'),
            'id_video'      => $request->get('id_video'),
            'category_id'   => $request->get('category_id'),
        ]);
            // tenemos el modelo del usuario autenticado y luego llamamos al metodo videos() (con el parentesis se interactua con el objeto de la relacion)

        // SE GRABA EN una propiedad $fillable que esta en el modelo de viceo


        return Redirect::route('videos.details', $video->id);
    }

    public function edit($id)
    {
        $video = Video::find($id);
        $mascategorias = Category::orderBy('id', 'ASC')->paginate(24);

        return view('videos.edit', compact('video', 'mascategorias'));
    }

    public function update($id,Request $request)
    {
        $video = Video::findOrFail($id);
        $video->update($request->all());

        return Redirect::route('videos.details', $video->id);
    }

    public function destroy($id)
    {
        $video = Video::findOrFail($id);
        $video->delete();

        return Redirect::route('videos.videosadmin', $video->id);
    }




}