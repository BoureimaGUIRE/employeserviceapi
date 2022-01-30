<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->string('numeroContrat');
            $table->string('typeContrat');
            $table->string('categorie');
            $table->decimal('salaireBase');
            $table->string('modePaiement');
            $table->string('visaContratSiEtranger');
            $table->date('dateDebut');
            $table->date('dateFin')->nullable();
            $table->foreignId('employe_id')->constrained();
            $table->foreignId('poste_id')->constrained();
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contrats', function(Blueprint $table){
            $table->dropForeign('employe_id');
            $table->dropForeign('poste_id');
        });
        Schema::dropIfExists('contrats');
    }
}
