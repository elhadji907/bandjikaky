<?php

namespace App\Http\Controllers;

use App\Generation;
use App\Role;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class GenerationsController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /* roles */
         $this->middleware('auth');
    }
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
        
        $generations = Generation::get();
        return view('generations.index', compact('generations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        $generations = Generation::get();
        return view('generations.create',compact('roles','generations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
    public function edit($id)
    {
        $generations = Generation::get();
        $generation = Generation::find($id);
        $roles = Role::get();
        return view('generations.update', compact('generation','id','roles', 'generations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Generation  $generation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'generation'     =>  'required|string|max:200|unique:generations,name',
            ]
        );

        $generation = Generation::find($id);

        $generation->name   =     $request->input('generation');

        $generation->save();
        
        return redirect()->route('generations.index')->with('success','generation modifiée avec succès !');
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
