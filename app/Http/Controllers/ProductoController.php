<?php

namespace App\Http\Controllers;

use App\Models\Categoriaproducto;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    
    public function index()
    {
        // $productos = Producto::paginate(5);
        $producto = new Producto();
        $catProd = Categoriaproducto::all()->pluck('nombre','id');
        return view('producto.index', compact('producto', 'catProd'))
            ->with('i', 0);
    }

    public function data(){
        $productos = array("data" =>Producto::select('id','nombre','precioVenta','minimoStock','activo','categoriaProducto_id')->get());
        
        return response()->json($productos);
    }
   
    public function create()
    {
        $producto = new Producto();
        return view('producto.create', compact('producto'));
    }

    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto creado correctamente.');
    }

    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

  
    public function edit($id)
    {
        $catProd = Categoriaproducto::all()->pluck('nombre','id');
        $producto = Producto::find($id);

        return view('producto.edit', compact('producto','catProd'));
    }

   
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto editado correctamente');
    }

  
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('success', 'Producto eliminado correctamente');
    }
}
