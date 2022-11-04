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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('nit',20);
            $table->string('direccion',100);
            $table->string('telefono',30);
            $table->string('responsable',50)->nullable();                   
            $table->string('telefonoResponsable',30)->nullable();
            $table->boolean('activo')->default(true);

            $table->foreignId('provcategoria_id')->nullable()->constrained()->nullOnDelete();

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
        Schema::dropIfExists('proveedores');
    }
};
