<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KorisniciUsluge extends Model
{
    protected $fillable = [
      'Datum', 'vrijeme', 'IDKorisnik', 'usluga'
    ];
    public $timestamps = false;

}
