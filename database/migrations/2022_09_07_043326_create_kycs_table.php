<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('dob')->nullable();
            $table->string('aadhaar')->nullable();
            $table->string('pan')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('town')->nullable();
            $table->string('pin')->nullable();
            $table->string('countryCode')->nullable();
            $table->string('flat')->nullable();
            $table->string('building')->nullable();
            $table->string('street')->nullable();
            $table->string('area')->nullable();
            $table->string('aadhaarFront')->nullable();
            $table->string('aadhaarBack')->nullable();
            $table->string('panFront')->nullable();
            $table->string('shopFront')->nullable();
            $table->string('agentLive')->nullable();
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
        Schema::dropIfExists('kycs');
    }
}
