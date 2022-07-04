<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Vol;

class ReservationController extends Controller



{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        return view('reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vols = Vol::all();
        return view('reservation.create',compact('vols'));
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
            'nom_passager' => 'required|max:255',
            'prenom_passager' => 'required',
            'sexe_passager' => 'required',
            'num_pieces' => 'required',
            'date_reservation' => 'required',
            'categorie' => 'required',
            'destination' => 'required',
            'code_vol' => 'required',
            'id_vol' => 'required',
            'prix' => 'required',
        ]);
    
        $reservation = Reservation::create($validatedData);
    
        return redirect('/reservations')->with('success', 'reservation créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $reservation = Reservation::findOrfail($id);
        return view('reservation.show',compact('reservation')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        
        $vols = Vol::all();

    return view('reservation.edit', compact('vols', 'reservation'));
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
            'nom_passager' => 'required|max:255',
            'prenom_passager' => 'required',
            'sexe_passager' => 'required',
            'num_pieces' => 'required',
            'date_reservation' => 'required',
            'categorie' => 'required',
            'destination' => 'required',
            'code_vol' => 'required',
            'id_vol' => 'required',
            'prix' => 'required',
        ]);
    
        Reservation::whereId($id)->update($validatedData);
    
        return redirect('/reservations')->with('success', 'passager mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation= Reservation::findOrFail($id);
    $reservation->delete();

    return redirect('/reservations')->with('success', 'passager supprimer avec succèss');
    }
}
