<?php

namespace App\Http\Controllers\PetCare;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Estabelecimento;

class EstabelecimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estabelecimentos = Estabelecimento::paginate(10);
        return view('pages.estabelecimento.index', compact('estabelecimentos'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.estabelecimento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Estabelecimento::create($request->all());
        return response()->redirectToRoute('estabelecimento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);
        return view('pages.estabelecimento.show', compact('estabelecimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);
        return view('pages.estabelecimento.edit', compact('estabelecimento'));
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
        $estabelecimento = Estabelecimento::findOrFail($id);
        $estabelecimento->update($request->all());
        return response()->redirectToRoute('estabelecimento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estabelecimento = Estabelecimento::findOrFail($id);
        $estabelecimento->delete();
        return response()->redirectToRoute('estabelecimento.index');
    }
}
