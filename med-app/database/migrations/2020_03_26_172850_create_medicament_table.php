<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicaments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('id_ENREGISTREMENT')->nullable();
            $table->string('CODE')->nullable();
            $table->string('DCI')->nullable();
            $table->string('NOM_DE_MARQUE')->nullable();
            $table->string('FORME')->nullable();
            $table->string('DOSAGE')->nullable();
            $table->string('COND')->nullable();
            $table->string('PAYS')->nullable();
            $table->string('TYPE')->nullable();
            $table->string('PPA')->nullable();
            $table->string('REMBOURSEMENT')->nullable();
            $table->string('TARIF')->nullable();
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
        Schema::dropIfExists('medicaments');
    }
}
