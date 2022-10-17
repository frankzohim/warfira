<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTravellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_travellers', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('date_of_birth');
            $table->string('email');

            $table->string('passport_user_name')->nullable();
            $table->string('passport_nationality_country_code')->nullable();
            $table->integer('passport_expiry_day')->unsigned()->nullable();
            $table->string('passport_expiry_month')->nullable();
            $table->integer('passport_expiry_year')->unsigned()->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_issuing_country_code')->nullable();

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_travellers');
    }
}
