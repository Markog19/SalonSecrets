<?php

namespace App\Http\Controllers;

use App\KorisniciUsluge;
use Illuminate\Http\Request;
use Auth;
class KorisniciUslugeContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $termin = Korisniciusluge::all();
 
        return view('rezervacije',[
            'user'=>$termin,
        ]);
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
       
        $termin = new Korisniciusluge;
        $termin->Datum =$request->datum;
        $termin->vrijeme = $request->vrijeme;
        $termin->usluga = $request->listUsluga;
        $termin->IDKorisnik =  Auth::user()->id;
        

 
        $termin->save();
        return redirect('/rezervacije')->with('success', 'Termin created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KorisniciUsluge  $korisniciUsluge
     * @return \Illuminate\Http\Response
     */
    public function show(KorisniciUsluge $korisniciUsluge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KorisniciUsluge  $korisniciUsluge
     * @return \Illuminate\Http\Response
     */
    public function edit(KorisniciUsluge $korisniciUsluge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KorisniciUsluge  $korisniciUsluge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KorisniciUsluge $korisniciUsluge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KorisniciUsluge  $korisniciUsluge
     * @return \Illuminate\Http\Response
     */
    public function destroy(KorisniciUsluge $korisniciUsluge)
    {
        //
    }
}
