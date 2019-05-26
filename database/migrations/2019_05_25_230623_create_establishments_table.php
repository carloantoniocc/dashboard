<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablishmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establishments', function (Blueprint $table) {
            $table->increments('id');
			$table->string('code')->unique();
			$table->string('name')->unique();
			$table->integer('typeEstablishment_id')->unsigned();
            $table->integer('commune_id')->unsigned();
			$table->string('direccion');
			$table->double('X', 15, 8)->nullable();
			$table->double('Y', 15, 8)->nullable();
			$table->boolean('active')->default(true);
            $table->timestamps(); 

			$table->foreign('typeEstablishment_id')->references('id')->on('typeEstablishments')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('commune_id')->references('id')->on('communes')->onUpdate('cascade')->onDelete('cascade')
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establishments');
    }
}
