<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->String('name');
            $table->String('pseudo')->default('null');
            $table->String('email');
            $table->String('raison');
            $table->String('importance');
            $table->String('url')->default('null');
            $table->text('message');
            $table->boolean('validation')->default(false);
            $table->String('progression')->default(0);
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
        Schema::dropIfExists('contact_messages');
    }
}
