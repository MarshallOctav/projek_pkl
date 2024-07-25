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
    Schema::create('jawabans', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_pertanyaan');
        $table->enum('jawaban', ['iya', 'tidak']); // Enumerasi nilai yang mungkin
        $table->date('tanggal');
        $table->foreign('id_pertanyaan')->references('id')->on('pertanyaans')->onDelete('cascade');
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
        Schema::dropIfExists('jawabans');
    }
};
