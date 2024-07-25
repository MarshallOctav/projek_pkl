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
        Schema::create('jenis_kepribadians', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kepribadian');
            $table->string('gambar')->nullable();
            $table->text('pengertian');
            $table->text('kekurangan');
            $table->text('kelebihan');
            $table->text('karir');
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
        Schema::dropIfExists('jenis_kepribadians');
    }
};
