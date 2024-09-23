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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama'); // Kolom untuk nama
            $table->string('alamat'); // Kolom untuk alamat
            $table->string('no_telepon'); // Kolom untuk nomor telepon
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
};
