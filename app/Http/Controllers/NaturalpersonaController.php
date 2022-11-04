<?php

namespace App\Http\Controllers;

use App\Models\Naturalpersona;
use Illuminate\Http\Request;

/**
 * Class NaturalpersonaController
 * @package App\Http\Controllers
 */
class NaturalpersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $naturalpersonas = Naturalpersona::paginate();

        return view('naturalpersona.index', compact('naturalpersonas'))
            ->with('i', (request()->input('page', 1) - 1) * $naturalpersonas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $naturalpersona = new Naturalpersona();
        return view('naturalpersona.create', compact('naturalpersona'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Naturalpersona::$rules);

        $naturalpersona = Naturalpersona::create($request->all());

        return redirect()->route('naturalpersonas.index')
            ->with('success', 'Naturalpersona created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $naturalpersona = Naturalpersona::find($id);

        return view('naturalpersona.show', compact('naturalpersona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $naturalpersona = Naturalpersona::find($id);

        return view('naturalpersona.edit', compact('naturalpersona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Naturalpersona $naturalpersona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Naturalpersona $naturalpersona)
    {
        request()->validate(Naturalpersona::$rules);

        $naturalpersona->update($request->all());

        return redirect()->route('naturalpersonas.index')
            ->with('success', 'Naturalpersona updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $naturalpersona = Naturalpersona::find($id)->delete();

        return redirect()->route('naturalpersonas.index')
            ->with('success', 'Naturalpersona deleted successfully');
    }
}
