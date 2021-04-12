<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDbAbsensiMa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nik', 30);
            $table->string('nama', 30);
            $table->string('telp', 30);
            $table->string('email', 30);
            $table->text('alamat');
            $table->string('foto', 30);
            $table->string('jabatan', 30);
            $table->string('username', 30);
            $table->string('password', 30);
            $table->string('level', 30);
        });

        Schema::create('jam', function (Blueprint $table) {
            $table->increments('id_user');
            $table->time('start');
            $table->time('finish');
            $table->string('keterangan', 30);
        });

        Schema::create('jabatan', function (Blueprint $table) {
            $table->increments('id_jabatan');
            $table->string('nama_jabatan', 30);
        });

        Schema::create('absensi', function (Blueprint $table) {
            $table->increments('id_absen');
            $table->date('tgl');
            $table->time('waktu');
            $table->string('keterangan', 30);
            $table->text('lokasi');
            $table->integer('id_user'); 
        });

        Schema::create('info', function (Blueprint $table) {
            $table->string('logo', 50);
            $table->string('banner', 50);
            $table->string('highlight1', 50);
            $table->string('highlight2', 50);
            $table->string('highlight3', 50);
        });
    }
}
