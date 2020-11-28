<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()//up wstawia tabele
    {
        Schema::create('sites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');//utowrzyliśmy 2 kolumny
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()//usuwa tabele
    {
        Schema::dropIfExists('sites');
    }
}
