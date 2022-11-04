<?php

namespace App\Http\Controllers;

use App\Models\Provcategoria;
use Illuminate\Http\Request;

/**
 * Class ProvcategoriaController
 * @package App\Http\Controllers
 */
class ProvcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provcategorias = Provcategoria::paginate();

        return view('provcategoria.index', compact('provcategorias'))
            ->with('i', (request()->input('page', 1) - 1) * $provcategorias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provcategoria = new Provcategoria();
        return view('provcategoria.create', compact('provcategoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Provcategoria::$rules);

        $provcategoria = Provcategoria::create($request->all());

        return redirect()->route('provcategorias.index')
            ->with('success', 'Provcategoria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $provcategoria = Provcategoria::find($id);

        return view('provcategoria.show', compact('provcategoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provcategoria = Provcategoria::find($id);

        return view('provcategoria.edit', compact('provcategoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Provcategoria $provcategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provcategoria $provcategoria)
    {
        request()->validate(Provcategoria::$rules);

        $provcategoria->update($request->all());

        return redirect()->route('provcategorias.index')
            ->with('success', 'Provcategoria updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $provcategoria = Provcategoria::find($id)->delete();

        return redirect()->route('provcategorias.index')
            ->with('success', 'Provcategoria deleted successfully');
    }
}
