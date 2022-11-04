<?php

namespace App\Http\Controllers;

use App\Models\Juridicopersona;
use Illuminate\Http\Request;

/**
 * Class JuridicopersonaController
 * @package App\Http\Controllers
 */
class JuridicopersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $juridicopersonas = Juridicopersona::paginate();

        return view('juridicopersona.index', compact('juridicopersonas'))
            ->with('i', (request()->input('page', 1) - 1) * $juridicopersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $juridicopersona = new Juridicopersona();
        return view('juridicopersona.create', compact('juridicopersona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Juridicopersona::$rules);

        $juridicopersona = Juridicopersona::create($request->all());

        return redirect()->route('juridicopersonas.index')
            ->with('success', 'Juridicopersona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $juridicopersona = Juridicopersona::find($id);

        return view('juridicopersona.show', compact('juridicopersona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $juridicopersona = Juridicopersona::find($id);

        return view('juridicopersona.edit', compact('juridicopersona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Juridicopersona $juridicopersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Juridicopersona $juridicopersona)
    {
        request()->validate(Juridicopersona::$rules);

        $juridicopersona->update($request->all());

        return redirect()->route('juridicopersonas.index')
            ->with('success', 'Juridicopersona updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $juridicopersona = Juridicopersona::find($id)->delete();

        return redirect()->route('juridicopersonas.index')
            ->with('success', 'Juridicopersona deleted successfully');
    }
}
