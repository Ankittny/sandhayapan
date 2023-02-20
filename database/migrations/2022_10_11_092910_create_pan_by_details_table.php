<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePanByDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pan_by_details', function (Blueprint $table) {
            $table->id();
            $table->string('appName')->null();
            $table->string('fatherName')->null();
            $table->string('dob')->null();
            $table->string('pincode')->null();
            $table->string('status')->default(0);
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
        Schema::dropIfExists('pan_by_details');
    }
}
