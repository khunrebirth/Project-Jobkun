<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('own_name');
            $table->string('detail');
            $table->string('address');
            $table->string('province');
            $table->string('district');
            $table->string('zone');
            $table->string('zip');
            $table->string('phone');
            $table->string('email');

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('company_type_id')->unsigned()->nullable();

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');

            $table->foreign('company_type_id')
                ->references('id')->on('company_type')
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
        Schema::dropIfExists('companies');
    }
}
