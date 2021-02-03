<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_barang_masuk', function (Blueprint $table) {
            $table->integer('id_barang_masuk')->unsigned()->change();
            $table->foreign('id_barang_masuk')->references('id_barang_masuk')->on('barang_masuk')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_barang')->unsigned()->change();
            $table->foreign('id_barang')->references('id_barang')->on('barang')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('detail_barang_keluar', function (Blueprint $table) {
            $table->integer('id_barang_keluar')->unsigned()->change();
            $table->foreign('id_barang_keluar')->references('id_barang_keluar')->on('barang_keluar')
                ->onUpdate('cascade')->onDelete('cascade');

            $table->integer('id_barang')->unsigned()->change();
            $table->foreign('id_barang')->references('id_barang')->on('barang')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('barang_masuk', function (Blueprint $table) {
            $table->integer('id_supplier')->unsigned()->change();
            $table->foreign('id_supplier')->references('id_supplier')->on('supplier')
                ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::table('barang_keluar', function (Blueprint $table) {
            $table->integer('id_departemen')->unsigned()->change();
            $table->foreign('id_departemen')->references('id_departemen')->on('departemen')
                ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
