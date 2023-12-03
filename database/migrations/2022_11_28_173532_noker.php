<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Noker extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noker', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('spesifikasi_id');
            $table->char('bpkb', 20);
            $table->char('plat', 20);
            $table->char('rangka', 45);
            $table->char('mesin', 20);            
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
        Schema::dropIfExists('noker');
    }
}