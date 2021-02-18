<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RentaZaKucuKljuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('renta', function (Blueprint $table) {
            $table->unsignedbigInteger('kuca_id');
            $table->foreign('kuca_id')->references('id')->on('kuca')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('renta', function (Blueprint $table) {
            $table->dropForeign(['kuca_id']);
        });
    }
}
