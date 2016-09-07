<?php

namespace Xvideos\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Xvideos\Entities\Category;
use Xvideos\Http\Requests;

class CategoriesController extends Controller
{


    public function latest()
    {
        $categorias = Category::orderBy('created_at', 'DESC')->paginate(24);


        return view('dashboard.categorias', compact('categorias'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request, Guard $auth)
    {

        //dd($request->all());

        $this->validate($request, [
            'name' => 'required|max:16',
            'imagen' => '',
        ]);

        $category = new Category();
        $category->name = $request->get('name');
        $category->imagen = $request->get('imagen');
        $category->save();

        //dd($category);
        return Redirect::route('categories.latest', $category->id);


    }




    public function mostrarcategorias()
    {
        $mascategorias = Category::orderBy('id', 'ASC')->paginate(24);


        return view('videos.create', compact('mascategorias'));
    }


    public function edit($id)
    {
        $category = Category::find($id);
        //$mascategorias = Category::orderBy('id', 'ASC')->paginate(24);

        return view('category.edit', compact('category'));
    }

    public function update($id,Request $request)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return Redirect::route('categories.latest', $category->id);
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return Redirect::route('categories.latest', $category->id);
    }


}
