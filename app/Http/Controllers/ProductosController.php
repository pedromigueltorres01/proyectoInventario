<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\ArticuloProducto;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return 'Estas en el index'
        $contador = 1;
        $productos=ArticuloProducto::paginate(6);
        return view('productos.index', compact('productos','contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([
    'NombreArticulo' => 'required|unique:articulo_productos,NombreArticulo',
], [
    'NombreArticulo.required' => 'El  nombre del producto es obligatorio.',
    'NombreArticulo.unique' => 'Ya existe un producto con ese nombre, desea añadir al Stand?',
]);

        //
       // return view('productos.insert');
        $producto=new ArticuloProducto();
        $producto->NombreArticulo=$request->NombreArticulo;
        $producto->Precio=$request->Precio;
        $producto->Marca=$request->Marca;
        $producto->Descripcion=$request->Descripcion;
        $producto->Stock_cantidad=$request->Stock_cantidad;
        $producto->save();

        $contador = 1;
        $productos=ArticuloProducto::paginate(6);
        return view('productos.index', compact('productos','contador'));
        //return view('welcome');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto=ArticuloProducto::findOrFail($id);
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Producto::findOrFail($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $producto=ArticuloProducto::findOrFail($id);
        $producto->update($request->all());
        return view('productos.show',compact('producto'));
    }
    /*public function buscar($id){
        $producto=Producto::findOrFail(17);
        
        return view('productos/buscar');
    }*/
    public function getIndex(Request $request){
        $contador = 1;
        $nombre=$request->input('nombre');
        $productos=ArticuloProducto::where('NombreArticulo', 'like','%'.$nombre. '%')->get();
        return view('productos.proporlote', compact('productos','contador'));
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $contador = 1;
         $producto=Producto::findOrFail($id);
         $producto->delete();
         $productos=Producto::paginate(6);
         return view('productos.index', compact('productos','contador'));
    }
}
