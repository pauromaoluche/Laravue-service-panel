<?php

namespace App\Http\Controllers;

use App\Models\StatusAtend;
use Illuminate\Http\Request;

class StatusAtendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status = StatusAtend::get();

        return $status;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusAtend  $statusAtend
     * @return \Illuminate\Http\Response
     */
    public function show(StatusAtend $statusAtend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusAtend  $statusAtend
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusAtend $statusAtend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatusAtend  $statusAtend
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusAtend $statusAtend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusAtend  $statusAtend
     * @return \Illuminate\Http\Response
     */
    public function destroy(StatusAtend $statusAtend)
    {
        //
    }
}
