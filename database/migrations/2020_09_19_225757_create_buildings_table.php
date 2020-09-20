<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable($value = false);
            $table->text('description')->nullable($value = false);
            $table->float('price')->nullable($value = false);
            $table->string('address', 200)->nullable($value = false);
            $table->string('state', 2)->nullable($value = false);
            $table->string('city', 100)->nullable($value = false);
            $table->string('zip', 5)->nullable($value = false);
            $table->string('country', 2)->nullable($value = false);
            $table->string('image')->nullable($value = false);
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
        Schema::dropIfExists('buildings');
    }
}
