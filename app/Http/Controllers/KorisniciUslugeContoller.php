<?php

namespace App\Http\Controllers;

use App\KorisniciUsluge;
use Illuminate\Http\Request;
use Auth;
use Response;
use DB;
class KorisniciUslugeContoller extends Controller
{
  public function index(){
         $termini = Korisniciusluge::all();
        return view('rezervacije')->with('termin', $termini);

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
    public function show()
    {
        $id = Auth::user()->id;
        $termini = Korisniciusluge::all()->where('IDKorisnik',$id);


        return view('profil')->with('termini', $termini);

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
        return redirect('/rezervacije');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KorisniciUsluge  $korisniciUsluge
     * @return \Illuminate\Http\Response
     */
  

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
    public function update(Request $request,$id)
    {

        DB::table('korisnici_usluges')->where('id', $id)->update([
                'Datum'=>$request->datum,
                'vrijeme'=>$request->vrijeme,
                'usluga'=>$request->usluga

        ]);
                    return redirect('profil');


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
 
 
    public function delete ($id){

         Korisniciusluge::where('id', $id)->delete();
        return redirect('profil');
    }
    public function fetch($i){
        $id = Korisniciusluge::skip($i)->first();
        return response()->json($id);
    }
}

