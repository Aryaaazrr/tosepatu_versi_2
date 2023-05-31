<?php

namespace App\Http\Controllers;

use App\Models\Forgot;
use Illuminate\Http\Request;

class ForgotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.forgot');
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
     * @param  \App\Models\Forgot  $forgot
     * @return \Illuminate\Http\Response
     */
    public function show(Forgot $forgot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forgot  $forgot
     * @return \Illuminate\Http\Response
     */
    public function edit(Forgot $forgot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forgot  $forgot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forgot $forgot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forgot  $forgot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forgot $forgot)
    {
        //
    }
}
