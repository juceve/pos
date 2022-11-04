<?php

namespace App\Http\Controllers;

use App\Models\Movimiento;
use App\Models\Prodlote;
use App\Models\Producto;
use App\Models\Tipomovimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProdloteController
 * @package App\Http\Controllers
 */
class ProdloteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prodlotes = Prodlote::where('estado',true)->paginate();
        $productos = Producto::all();
        return view('prodlote.index', compact('prodlotes', 'productos'))
            ->with('i', (request()->input('page', 1) - 1) * $prodlotes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prodlote = new Prodlote();
        return view('prodlote.create', compact('prodlote'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Prodlote::$rules);
        $producto = Producto::find($request->producto_id);
        $movimiento = new Movimiento();
        $movimiento->fecha = now();
        $movimiento->concepto = $request->concepto;
        $movimiento->tipomovimiento_id = 1;  
        $movimiento->user_id = auth()->id();
        $movimiento->save();

        $prodlote = Prodlote::create([
            "fecha" => $request->fecha,
            "producto_id" => $request->producto_id,
            "proveedore_id" => $producto->proveedore_id,
            "movimiento_id" => $movimiento->id,
            "cantProducto" => $request->cantProducto,
            "vencimiento" => $request->vencimiento,
        ]);

        return redirect()->route('prodlotes.index')
            ->with('success', "Lore registrado correctamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prodlote = Prodlote::find($id);

        return view('prodlote.show', compact('prodlote'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodlote = Prodlote::find($id);
        $productos = Producto::all()->pluck('nombre','id');
        return view('prodlote.edit', compact('prodlote','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Prodlote $prodlote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prodlote $prodlote)
    {
        request()->validate(Prodlote::$rules);

        $prodlote->update($request->all());

        return redirect()->route('prodlotes.index')
            ->with('success', 'Prodlote updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $prodlote = Prodlote::find($id);
        $prodlote->estado = false;
        $prodlote->save();
        $movimiento = Movimiento::find($prodlote->movimiento_id);
        $movimiento->estado = false;
        $movimiento->save();
        return redirect()->route('prodlotes.index')
            ->with('success', 'Prodlote deleted successfully');
    }
}
