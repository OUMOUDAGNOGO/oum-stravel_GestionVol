<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            
                $table->id();
                $table->string('nom');
                $table->string('prenom');
                $table->string('sexe');
                $table->string('num_pieces');
                $table->date('date_reservation');
                $table->string('classA');
                $table->string('classB');
                $table->string('destination');
                $table->string('code_vol');
                $table->foreignId('id_vol')->constrained('vols');
                $table->integer('prix_classA');
                $table->integer('prix_classB');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
