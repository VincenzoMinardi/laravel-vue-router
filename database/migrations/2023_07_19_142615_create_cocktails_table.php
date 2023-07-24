<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cocktails', function (Blueprint $table) {
            $table->id();
            $table->string('nameDrink', 200);
            $table->string('category', 100);
            $table->string('alcoholic', 100);
            $table->string('glass', 50);
            $table->string('imgURL', 200)->nullable();
            $table->string('ingredient_1', 200);
            $table->string('ingredient_2', 250);
            $table->string('ingredient_3', 300)->nullable();
            $table->string('ingredient_4', 300)->nullable();
            $table->string('ingredient_5', 300)->nullable();
            $table->string('ingredient_6', 300)->nullable();
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
        Schema::dropIfExists('cocktails');
    }
};
