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
        Schema::create('naturalpersonas', function (Blueprint $table) {
            $table->id();

            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->string('nombre_completo',200);
            $table->string('domicilio',255)->nullable();
            $table->string('telefono',50)->nullable();
            $table->string('email',100)->nullable();

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
        Schema::dropIfExists('personas');
    }
};
