<?php

namespace App\Http\Controllers;

use App\Gallerie;
use App\Image;
use Illuminate\Http\Request;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return Gallerie:: all();


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
        return Gallerie:: create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Gallerie:: findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerie $gallerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerie $gallerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallerie $gallerie)
    {
        //
    }
}
