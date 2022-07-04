<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qurans', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->nullable();
            $table->integer('teacher_id')->nullable();
            $table->integer('juz_id')->nullable();
            $table->integer('surah_id')->nullable();
            $table->string('ayat_ids')->nullable();
            $table->string('ayate_count')->nullable();
            $table->longText('ayat')->nullable();
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
        Schema::dropIfExists('qurans');
    }
}
