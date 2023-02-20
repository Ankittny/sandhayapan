<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('heading')->nullable();
            $table->string('type')->nullable();
            $table->string('class')->nullable();
            $table->string('price')->nullable();
            $table->string('validity')->nullable();
            $table->string('service')->nullable();
            $table->string('charge1')->nullable();
            $table->string('charge2')->nullable();
            $table->string('charge3')->nullable();
            $table->string('charge4')->nullable();
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
        Schema::dropIfExists('prices');
    }
}
