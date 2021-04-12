<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class db_absensi_ma extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('absensi')->insert([
            'tgl' => '2021-04-12',
            'waktu' => '07:00:03',
            'keterangan' => 'Masuk',
            'lokasi' => 'Umbulsari-Jember',
            'id_user' => '6',
        ]);

        DB::table('info')->insert([
            'logo' => 'logo.jpg',
            'banner' => 'banner123.jpg',
            'highlight1' => 'Selamat Datang',
            'highlight2' => 'Di website E-Absensi',
            'highlight3' => 'Mahkamah Agung',
        ]);

        DB::table('jabatan')->insert([
            'nama_jabatan' => 'Sekretaris',
        ]);

        DB::table('jam')->insert([
            'start' => '06:00:00',
            'finish' => '08:00:10',
            'keterangan' => 'Masuk',
        ]);

        DB::table('user')->insert([
            'nik' => '123321213231',
            'nama' => 'Dimas Cahya Ramadhan',
            'telp' => '081211686202',
            'email' => 'dimascr27@gmail.com',
            'alamat' => 'Umbulsari-jember',
            'foto' => 'foto.jpg',
            'jabatan' => 'admin',
            'username' => 'admin',
            'password' => '1234567890',
            'level' => 'admin',
        ]);
    }
}
