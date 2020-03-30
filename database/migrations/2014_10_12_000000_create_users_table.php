<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_first');
            $table->string('name_last');
            $table->enum('atc_rating', ["INA", "SUS", "OBS", "S1", "S2", "S3", "C1", "C3", "I1", "I3", "SUP", "ADM"]);
            $table->text('access_token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->unsignedBigInteger('token_expires')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
