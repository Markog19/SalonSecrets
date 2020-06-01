<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKorisniciUslugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('korisnici_usluges', function (Blueprint $table) {
            $table->id();
            $table->date('Datum');
            $table->float('vrijeme');
            $table->string('usluga');
            $table->biginteger('IDKorisnik')->unsigned()->index();
            $table->foreign('IDKorisnik')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('korisnici_usluges');
    }
}
