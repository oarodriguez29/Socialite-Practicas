<?php

namespace Socialite\Http\Controllers;

use Socialite\Imagen;
use Illuminate\Http\Request;
use Socialite\Http\Requests\StoreImagenRequest;

class TestDeImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgs = Imagen::all();
        return view('imagenes/index', compact('imgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Retorna la Vista 'create' de las carpeta 'Imagenes'
        return view('imagenes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImagenRequest $request)
    {
        //dd($request);

        if($request->hasFile('imagen')) {

            $file = $request->file('imagen');
            $img = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $img);
        }
            $imagen = new Imagen();
            $imagen->nam_img = $request->input('nam_img');
            $imagen->description = $request->input('description');
            $imagen->slug = $request->input('slug');
            $imagen->avatar = $img;
            $imagen->save();

            return redirect()->route('imagenes.index');

            /*return "Imagen Guardada con Exito! <a class='btn btn-danger' href='imagenes/create'>Volver</a>";*/
        //return $request->input('imagen');
        //return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // muestra el slug -> (Alias URL) en la URL.
        $imagen = Imagen::where('slug','=',$slug)->firstOrFail();

        //$imagen = Imagen::find($id);        
        // Carga la Vista y envia el Arreglo como Argumento.
        return view('imagenes.show', compact('imagen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {        
        $imagen = Imagen::where('slug','=',$slug)->firstOrFail();

        return view('imagenes.edit', compact('imagen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $imagen = Imagen::where('slug','=',$slug)->firstOrFail();
        $imagen->fill($request->except('avatar'));

        if($request->hasFile('imagen')) {

            $file = $request->file('imagen');
            $img = time().$file->getClientOriginalName();
            $imagen->avatar = $img;
            $file->move(public_path().'/images/', $img);
        }

        $imagen->save();

        return redirect()->route('imagenes.show', [$slug])->with('status','Imagen Actualizada Correctamente');
        /*return redirect()->route('imagenes.show', [$slug]);*/
        /*return "Imagen Actualizada <br><a href='/imagenes/'>Volver</a>";*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        // Obtengo los Datos de la Imagen por Slug.
        $imagen = Imagen::where('slug','=',$slug)->firstOrFail();
        // Ruta de Imagen a Eliminar.
        $ruta_img = public_path().'/images/'.$imagen->avatar;
        // Elimino el Archivo .jpg del Aplicativo
        \File::delete($ruta_img);
        // Elimino la Imagen
        $imagen->delete();

        return redirect()->route('imagenes.index');
        // Retorno Msj.
        /*return "Imagen Eliminada <br><a href='/imagenes/'>Volver</a>";*/
    }
}
