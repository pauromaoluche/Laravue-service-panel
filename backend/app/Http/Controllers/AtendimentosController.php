<?php

namespace App\Http\Controllers;


use App\Models\Atendimento;
use Illuminate\Http\Request;


class AtendimentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $atendimentos = Atendimento::with(['provedor_id', 'user_id', 'setor_id', 'gerado_por', 'service_type_id'])->get();

        // $atendimentos = Atendimento::join('provedors', 'provedors.id', '=', 'atendimentos.provedor_id')
        //     ->join('users', 'users.id', '=', 'atendimentos.user_id')
        //     ->get(['provedors.nome as provedor', 'atendimentos.*', 'users.name']);
        return $atendimentos;
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
        Atendimento::create($dados);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atendimentos = Atendimento::with(['provedor', 'user', 'setor', 'gerado_por', 'service_type'])->where('id', $id)->get();

        return $atendimentos;
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atendimentos = Atendimento::find($id);
    
        $atendimentos->delete();
    }
}
