<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda',100);
            $table->string('Stazione di partenza', 100);
            $table->string('Stazione di arrivo', 100);
            $table->date('Data di partenza');
            $table->string('Orario di partenza');
            $table->string('Orario di arrivo');
            $table->string('Codice Treno');
            $table->tinyInteger('Numero Carrozze')->unsigned();
            $table->boolean('In orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
        Schema::dropIfExists('trains');
    }
};
