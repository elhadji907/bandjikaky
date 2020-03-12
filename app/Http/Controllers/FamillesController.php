<?php

namespace App\Http\Controllers;

use App\Famille;
use App\Quartier;
use App\Generation;
use App\Role;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class FamillesController extends Controller
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
        return view('familles.index', compact('generations'));
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
        $quartiers = Quartier::get();
        return view('familles.create',compact('roles','generations','quartiers'));
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
                'famille'        =>  'required|string|max:200',
                'quartier'     =>  'required|string|max:200',
            ]
        );

        $famille = new Famille([
            'name'           =>      $request->input('famille'),
            'quartiers_id'   =>      $request->input('quartier')
        ]);


        $famille->save();

        return redirect()->route('familles.index')->with('success','enregistrement effectué avec succès !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function show(Famille $famille)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function edit(Famille $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Famille $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Famille  $famille
     * @return \Illuminate\Http\Response
     */
    public function destroy(Famille $famille)
    {
        $famille->delete();
        $message = $famille->name.' a été supprimé(e)';
        return redirect()->route('familles.index')->with(compact('message'));
    }

    public function list(Request $request)
    {
        $familles=Famille::with('quartier')->orderBy('created_at', 'desc')->get();
        return Datatables::of($familles)->make(true);
    }
}
