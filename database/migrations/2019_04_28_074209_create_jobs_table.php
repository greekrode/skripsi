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
            $table->increments('id');
            $table->string('title');
            $table->string('city');
            $table->longText('country');
            $table->longText('description');
            $table->longText('basic_requirements');
            $table->longText('preferred_requirements');
            $table->longText('responsibilities');
            $table->longText('benefits');
            $table->dateTime('end_date');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('seniority_id');
            $table->foreign('seniority_id')->references('id')->on('seniorities');
            $table->unsignedInteger('type_id');
            $table->foreign('type_id')->references('id')->on('types');
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
