<?php

namespace App\Http\Controllers;

use App\Models\Vol;
use Illuminate\Http\Request;

class VolController extends Controller
{     
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vols = Vol::all();

        return view('index', compact('vols'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'code_vol' => 'required',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'destination'=>'required',
            'nb_classA'=>'required',
            'nb_classB'=>'required',
            'prix_classA'=>'required',
            'prix_classB'=>'required',
            
        ]);
        $vols = Vol::create($validatedData);

        return redirect('/vols')->with('success', 'vol programmer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vols = Vol::findOrFail($id);
        return view('show', compact('vols'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vol = Vol::findOrFail($id);

        return view('edit', compact('vol'));
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
        $validatedData = $request->validate([
            'code_vol' => 'required',
            'date_depart' => 'required',
            'heure_depart' => 'required',
            'destination'=>'required',
            'nb_classA'=>'required',
            'nb_classB'=>'required',
            'prix_classA'=>'required',
            'prix_classB'=>'required',
        ]);
    
        Vol::whereId($id)->update($validatedData);
    
        return redirect('/vols')->with('success', 'Vol mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vol= Vol::findOrFail($id);
    $vol->delete();

    return redirect('/vols')->with('success', 'Vol supprimer avec succèss');
    }
}
