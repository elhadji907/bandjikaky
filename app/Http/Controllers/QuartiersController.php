<?php

namespace App\Http\Controllers;

use App\Quartier;
use App\Generation;
use App\Role;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class QuartiersController extends Controller
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
    public function index()
    {
        
        $generations = Generation::get();
        return view('quartiers.index', compact('generations'));
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
        return view('quartiers.create',compact('roles','generations'));
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
                'quartier'     =>  'required|string|max:200|unique:quartiers,name',
            ]
        );

        $quartier = new Quartier([
            'name'           =>      $request->input('quartier')
        ]);


        $quartier->save();

        return redirect()->route('quartiers.index')->with('success','enregistrement effectué avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function show(Quartier $quartier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $generations = Generation::get();
        $quartier = Quartier::find($id);
        $roles = Role::get();
        return view('quartiers.update', compact('quartier','id','roles', 'generations'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(
            $request, [
                'quartier'     =>  'required|string|max:200|unique:quartiers,name',
            ]
        );

        $quartier = Quartier::find($id);

        $quartier->name   =     $request->input('quartier');

        $quartier->save();
        
        return redirect()->route('quartiers.index')->with('success','quartier modifiée avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartier $quartier)
    {
        $quartier->delete();
        $message = 'Le quartier '.$quartier->name.' a été supprimée avec succès';
        return redirect()->route('quartiers.index')->with(compact('message'));
    }

    public function list(Request $request)
    {
        $quartiers=Quartier::get();
        return Datatables::of($quartiers)->make(true);
    }
}
