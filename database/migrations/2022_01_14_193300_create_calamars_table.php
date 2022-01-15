<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calamars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',75);
            $table->string('codigo',5);
            $table->date('fecha');
            $table->string('foto',100);
            $table->string('telefono',15);
            $table->string('descripcion',500);
            $table->boolean('activo');
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
        Schema::dropIfExists('calamars');
    }
}
