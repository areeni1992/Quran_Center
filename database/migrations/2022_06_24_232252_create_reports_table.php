<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('clas_name')->nullable();
            $table->string('sorah_start')->nullable();
            $table->string('ayah_start')->nullable();
            $table->string('sorah_end')->nullable();
            $table->string('ayah_end')->nullable();
            $table->integer('page_revision_count')->nullable();
            $table->date('latest_test')->nullable();
            $table->date('report_date')->nullable();
            $table->integer('clas_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('monthly_rate')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
