<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnrollmentsTable extends Migration
{
    public function up()
    {
        Schema::create('enrollments', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');

            $table->string('course');

            $table->integer('marks')->nullable();

            $table->string('progress')->default('not started');

            $table->longText('comment')->nullable();

            $table->string('status')->default('awaiting');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}
