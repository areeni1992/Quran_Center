<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('ayah_count')->nullable();
            $table->integer('ayah_revision')->nullable();
            $table->string('marahalah');
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
        Schema::dropIfExists('clas');
    }
}
