<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusUserTable extends Migration
{
    public function up()
    {
        Schema::create('status_user', function (Blueprint $table) {

            $table->foreignId('status_id')->constrained();
            $table->foreignId('user_id')->constrained();

            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_user');
    }
}
