<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\Anuncio;

use Xvideos\Http\Requests;

class AnunciosController extends Controller
{

    public function latest()
    {
        $anuncios = Anuncio::orderBy('created_at', 'DESC')->paginate(24);

        return view('anuncios.latest', compact('anuncios'));
    }

    public function show($id) {
        $anuncio = Anuncio::find($id);
        return view('anuncios.show', compact('anuncio'));
    }

    public function index()
    {

    }
    public function edit($id)
    {
        $anuncio = Anuncio::find($id);
        $anuncios = Anuncio::all();
        return view('anuncios.edit', compact('anuncio', 'anuncios'));

    }
    public function update($id,Request $request)
    {
        $anuncio = Anuncio::findOrFail($id);
        $anuncio->update($request->all());

        return Redirect::route('anuncios.latest', $anuncio->id);
    }

    public function create()
    {
        return view('anuncios.create');
    }
    public function store(Request $request)
    {
        $anuncio = Anuncio::create($request->all());
        //return "Almancenando anuncio";
        //return view('anuncios.create');
        return Redirect::route('anuncios.latest', $anuncio->id);
    }
    public function destroy($id)
    {
        $anuncio = Anuncio::findOrFail($id);
        $anuncio->delete();

        return Redirect::route('anuncios.latest', $anuncio->id);

    }
}
