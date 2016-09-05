<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMconsoleCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mconsole_currencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('prefix')->nullable();
            $table->string('suffix')->nullable();
            $table->integer('basic')->default(100);
            $table->integer('decimals')->default(2);
            $table->string('delimiter');
            $table->json('names');
            $table->boolean('system')->default(false);
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
        Schema::drop('mconsole_currencies');
    }
}
