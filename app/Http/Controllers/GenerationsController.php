<?php

namespace App\Http\Controllers;

use App\Generation;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class GenerationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {        
        return view('generations.index');
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
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function show(Generation $generation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function edit(Generation $generation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Generation $generation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Generation $generation)
    {
        //
    }

    public function list(Request $request)
    {
        $generations=Generation::get();
        return Datatables::of($generations)->make(true);
    }
}
