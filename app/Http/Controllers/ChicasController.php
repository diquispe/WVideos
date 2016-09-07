<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\Anuncio;
use Xvideos\Entities\Chica;
use Xvideos\Http\Requests;

class ChicasController extends Controller
{
    public function __construct()
    {
        $this->middleware('chicas');
    }

    public function latest()
    {
        $chicas = Chica::orderBy('created_at', 'DESC')->paginate(24);

        return view('chicas.latest', compact('chicas'));
    }

    public function scorts(Request $request)
    {

        $chicas = Chica::nickname($request->get('nickname'))->pais($request->get('pais'))->ciudad($request->get('ciudad'))->orderBy('created_at', 'DESC')->paginate(24);

        return view('chicas.scorts', compact('chicas'));
    }


    public function create()
    {
        //return 'se ha enviado una informacion';
        /* $genres = Genre::lists('genre', 'id');
        return view('pelicula.create', compact('genres'));
        Esto es en el caso que querramos enviar una consulta de algunos elementos en el formulario de creacion, donde genres es el tipo de columan que jaleremos */
        return view('chicas.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:16',
            'url' => 'required|max:60',
            'email' => 'required|max:35',
            'lastname' => 'max:32',
            'nickname' => 'max:18',
            'phone' => 'max:14',
            'image' => 'max:2550',
            'photo1' => 'max:2550',
            'photo2' => 'max:2550',
            'photo3' => 'max:2550',
            'photo4' => 'max:2550',
            'photo5' => 'max:2550',
            'photo6' => 'max:2550',
            'photo7' => 'max:2550',
            'photo8' => 'max:2550',
            'photo9' => 'max:2550',
            'photo10' => 'max:2550',
            'resumen' => 'max:1200',
            'medidas' => 'max:10',
            'atencion' => 'max:20',
            'horario' => 'max:20',
            'edad' => 'max:2',
            'pais' => 'max:20',
            'estado' => 'max:20',
            'ciudad' => 'max:20',
        ]);




        /*$chica = $auth->user()->create([
            'title'         => $request->get('title'),
            'descripcion'   => $request->get('descripcion'),
            'id_video'      => $request->get('id_video'),
            'category_id'   => $request->get('category_id'),
        ]);
        */

        Chica::create($request->all());
        //$chica = Chica::findOrFail($request);




        return Redirect::route('chicas.scorts');




    }

    public function details($url)
    {
        $chica = Chica::where('url','=', $url)->firstOrFail();
        //$chica = Chica::findOrFail($url);
        //$comments = VideoComment::('video_id', $id)->paginate(5);
        /* $comments = VideoComment::select('video_comments.*', 'users.name')
            ->join('users', 'video_comments.user_id', '=', 'users.id')
            ->where('video_id', $id)
            ->paginate(); */
        return view('chicas.chica', compact('chica'));
        //dd($video->comments);
    }

    public function edit($id)
    {
        $chica = Chica::find($id);
        //$mascategorias = Category::orderBy('id', 'ASC')->paginate(24);

        return view('chicas.edit', compact('chica'));
    }

    public function update($id,Request $request)
    {
        $chica = Chica::findOrFail($id);
        $chica->update($request->all());

        return Redirect::route('chicas.chica', $chica->id);
    }

    public function destroy($id)
    {
        $chica = Chica::findOrFail($id);
        $chica->delete();

        return Redirect::route('chicas.latest', $chica->id);
    }




}
