<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lendersPreferences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lenderId');
            $table->string('band', 150);
            $table->string('turnover', 150);
            $table->string('categoryIds', 150);
            $table->string('rate', 150);
            $table->string('year', 150);
            $table->string('duration', 150);
            $table->string('otherRequirements', 200)->nullable();
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
        Schema::dropIfExists('preferences');
    }
}
