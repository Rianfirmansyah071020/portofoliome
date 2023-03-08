<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama'          => 'Rian Firmansyah',
            'email'         => 'rian071020@gmail.com',
            'password'      => Hash::make('123'),
            'github'        => 'rianfirmansyah071020',
            'tempat_lahir'  => 'singguling',
            'tanggal_lahir' => '2000/10/07',
            'jenis_kelamin' => 'laki-laki',
            'alamat'        => 'lubuk alung',
            'tamatan'       => 'S1',
            'jurusan'       => 'Sistem Informasi',
            'kampus'        => 'STMIK INDONESIA PADANG',
            'foto'          => 'rian.jpg'
        ]);
    }
}