<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('min_salary');
            $table->string('max_salary');
            $table->string('holiday');
            $table->time('work_time_start');
            $table->time('work_time_end');
            $table->string('gender');
            $table->integer('min_age');
            $table->integer('max_age');
            $table->string('education');
            $table->string('experiece');
            $table->text('contact');
            $table->string('province');
            $table->string('district');
            $table->string('zone');
            $table->string('zip');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('num');

            $table->bigInteger('company_id')->unsigned()->nullable();
            $table->bigInteger('job_category_id')->unsigned()->nullable();

            $table->foreign('company_id')
                ->references('id')->on('companies')
                ->onDelete('cascade');

            $table->foreign('job_category_id')
                ->references('id')->on('job_categories')
                ->onDelete('cascade');


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
        Schema::dropIfExists('jobs');
    }
}
