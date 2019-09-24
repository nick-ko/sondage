<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSondagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sondages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('age');
            $table->string('statut');
            $table->string('enfant');
            $table->string('telephone');
            $table->string('dure');
            $table->string('flux');
            $table->string('protection');
            $table->string('change');
            $table->string('tache');
            $table->string('budget');
            $table->string('change_complement');
            $table->string('serviette_complement');
            $table->string('tache_complement');
            $table->string('efficace');
            $table->string('simple');
            $table->string('confortable');
            $table->string('securite');
            $table->string('achat');
            $table->string('recommandation');
            $table->string('preference');
            $table->string('derangement');
            $table->string('modifier');
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
        Schema::dropIfExists('sondages');
    }
}
