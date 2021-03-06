<?php

namespace App\Http\Controllers;

use App\Models\Soundboard;
use Illuminate\Http\Request;

class SoundboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return json_encode(Soundboard::all());
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
     * @param  \App\Models\Soundboard  $soundboard
     * @return \Illuminate\Http\Response
     */
    public function show(Soundboard $soundboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Soundboard  $soundboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Soundboard $soundboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Soundboard  $soundboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soundboard $soundboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Soundboard  $soundboard
     * @return \Illuminate\Http\Response
     */
}
