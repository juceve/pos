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
        Schema::create('juridicopersonas', function (Blueprint $table) {
            $table->id();

            $table->string('razonsocial',200);
            $table->string('direccion',255)->nullable();
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
        Schema::dropIfExists('juridicopersonas');
    }
};
