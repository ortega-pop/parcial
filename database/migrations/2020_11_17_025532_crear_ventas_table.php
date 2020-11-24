<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
          
            $table->bigIncrements('id');
            $table->string('nombreProducto', 50);
            $table->integer('codProducto');
            $table->date('fechaCompra');
            $table->boolean('credito');
            $table->double('valorCompra');
            $table->text('descripcionProducto')->nullable();
           
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
        Schema::dropIfExists('ventas');
    }
}
