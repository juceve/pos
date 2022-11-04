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
        Schema::create('prodlotes', function (Blueprint $table) {
            $table->id();

            $table->date('fecha');
            $table->foreignId('producto_id')->constrained();   
            $table->foreignId('proveedore_id')->constrained();                  
            $table->integer('cantProducto');
            $table->date('vencimiento');   
            $table->foreignId('movimiento_id')->constrained();           
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('prodlotes');
    }
};
