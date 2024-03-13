<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('juals', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('title');
        $table->bigInteger('price');
        $table->string('amount'); // asumsi 'amount' ada dalam database Anda, jika tidak hapus baris ini
        $table->string('images');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('juals');
    }
}
