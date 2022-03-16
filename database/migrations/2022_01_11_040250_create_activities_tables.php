<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('activity_type');
            $table->string('subject');
            $table->string('status');
            $table->date('date');
            $table->time('time');
            $table->string('priority');
            $table->string('activity_owner');
        
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities_tables');
    }
}
