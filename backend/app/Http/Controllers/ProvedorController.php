<?php

namespace App\Http\Controllers;

use App\Models\Provedor;
use Illuminate\Http\Request;
use App\Models\Atendimento;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedores = Provedor::get();
        return $provedores;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        Provedor::create($dados);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function show(Provedor $provedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Provedor $provedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provedor $provedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provedor  $provedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $provedor = Provedor::find($id);

        $count = Atendimento::where('provedor_id', '=', "$id")
            ->get()->count();
    
        $provedor->delete();

        return "Provedor ". $provedor->nome ." deletado, e " . $count . " atendimento(s) vinculados a ele excluido(s)";
    }
}
