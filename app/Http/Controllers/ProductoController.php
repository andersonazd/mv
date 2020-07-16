<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Tipo;
use App\Clima;


use App\Http\Requests\StoreProductoRequest;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $productos = Producto::all();

        return view("productos.index", compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $climas = Clima::all();
        $tipos = Tipo::all();
        $categorias = Categoria::all();

        return view('productos.crear', compact('categorias' , 'tipos', 'climas'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductoRequest $request)
    {


        $producto = new Producto();

        if($request->hasFile('avatar')){
             $file = $request->file('avatar');
             $name = time().$file->getClientOriginalName();
             $file->move(public_path().'/images/', $name);
         }

         $producto->name = $request->input('name');
         $producto->comentario = $request->input('comentario');
         $producto->slug = $request->input('slug');
         $producto->categoria_id = $request->input('categoria');
         $producto->tipo_id = $request->input('tipo');
         $producto->infointeres = $request->input('infointeres');
         $producto->usorecomendado = $request->input('usorecomendado');
         $producto->lugarorigen = $request->input('lugarorigen');
         $producto->clima_id = $request->input('clima');
         $producto->avatar = $name;
         $producto->save();

        return redirect()->route('index')->with('statusVerde','Producto Creado Correctamente');
         //return 'Guardado';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {


      return view('productos.show', compact('producto'));


    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {

        $climas = Clima::all();
        $tipos = Tipo::all();
        $categorias = Categoria::all();

        return view('productos.edit', compact('categorias' , 'tipos', 'climas', 'producto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $producto->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }

        $producto->save();
        return redirect()->route('productos.index')->with('statusAzul','Producto Editado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy(Producto $producto)
    {
       $file_path = public_path().'/images/'.$producto->avatar;
       \File::delete($file_path);
       $producto->delete();
       return redirect()->route('productos.index')->with('statusRojo','Producto Eliminado Correctamente');
    }
}
