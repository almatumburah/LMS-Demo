<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLearnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('learners', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name');

            $table->string('last_name');

            $table->string('dob');

            $table->string('gender');

            $table->string('level');

            $table->string('contact');

            $table->string('address');

            $table->string('city');

            $table->string('province');

            $table->string('eligible_based_on');

            $table->string('current_school');

            $table->string('guardian_document')->nullable();

            $table->string('next_of_kin');

            $table->string('next_of_kin_address');

            $table->string('status')->default('accepted');

            $table->integer('user_id')->unique();

            $table->integer('institution_id');

            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('learners');
    }
}
