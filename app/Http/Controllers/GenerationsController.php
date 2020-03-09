<?php

namespace App\Http\Controllers;

use App\Generation;
use App\Role;
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
        $roles = Role::get();
        return view('generations.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $generation = $request->input('generation');
        // dd($generation);

        $this->validate(
            $request, [
                'generation'     =>  'required|string|max:200|unique:generations,name',
            ]
        );

        $generation = new Generation([
            'name'           =>      $request->input('generation')
        ]);

        // dd( $generation);

        $generation->save();

        return redirect()->route('generations.index')->with('success','enregistrement effectué avec succès !');
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
        $generation->delete();
        $message = 'La génération '.$generation->name.' a été supprimée avec succès';
        return redirect()->route('generations.index')->with(compact('message'));
    }

    public function list(Request $request)
    {
        $generations=Generation::get();
        return Datatables::of($generations)->make(true);
    }
}
