<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TerminiController extends Controller
{
	public function index(){
		return view('userpanel');
	}

	public function store(){
		$termini = new Korisniciusluge();
		$termini->Datum = 
		


	}

	public function create(){

	}

	public function show(){

	}


}
?>