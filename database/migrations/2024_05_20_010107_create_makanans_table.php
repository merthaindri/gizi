<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makanans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jenis_makanan');
            $table->string('nama_makanan');
            $table->timestamps();
            $table->unsignedBigInteger('natrium')->nullable();
            $table->unsignedBigInteger('kalium')->nullable();
            $table->unsignedBigInteger('protein')->nullable();
            $table->unsignedBigInteger('indeks_glikemik')->nullable();
            $table->unsignedBigInteger('cara_pengolahan')->nullable();

            $table->foreign('natrium')->references('id')->on('sub_kriterias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('kalium')->references('id')->on('sub_kriterias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('protein')->references('id')->on('sub_kriterias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('indeks_glikemik')->references('id')->on('sub_kriterias')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('cara_pengolahan')->references('id')->on('sub_kriterias')->onUpdate('NO ACTION')->onDelete('NO ACTION');

            $table->index('natrium');
            $table->index('kalium');
            $table->index('protein');
            $table->index('indeks_glikemik');
            $table->index('cara_pengolahan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('makanans');
    }
}
