<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndemnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indemnites', function (Blueprint $table) {
            $table->id();
            $table->string('libelleIndemnite');
            $table->decimal('montant');
            $table->foreignId('contrat_id')->constrained();
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
        Schema::table('indemnites', function(Blueprint $table){
            $table->dropForeign('contrat_id');
        });
        Schema::dropIfExists('indemnites');
    }
}
