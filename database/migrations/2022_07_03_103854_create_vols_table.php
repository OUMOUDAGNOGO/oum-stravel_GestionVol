<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('code_vol');
            $table->date('date_depart');
            $table->time('heure_depart');
            $table->longText('destination');
            $table->string('nb_classA');
            $table->string('nb_classB');
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
        Schema::dropIfExists('vols');
    }
}
