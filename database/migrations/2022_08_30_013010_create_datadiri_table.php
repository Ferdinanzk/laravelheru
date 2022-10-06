<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatadiriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datadiris', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama',50);
            $table->string('kelas',20);
            $table->string('jurusan',50);
            $table->string('nohp',20);
            $table->string('hobby',20);
            $table->text('cita');
            $table->text('alamat');
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
        Schema::dropIfExists('datadiri');
    }
}
