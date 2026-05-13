<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penduduk;

class pendudukseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penduduk::create([
            'nama' => 'John Doe',
            'nik' => '1234567890123456',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Gajah Mada Alamat No. 123, Kota Kediri'
        ]);
        Penduduk::create([
            'nama' => 'Johnny',
            'nik' => '1234567890123457',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'Jl. Mataram Alamat No. 19, Kota Kediri'
        ]);
        Penduduk::create([
            'nama' => 'Jane Doe',
            'nik' => '1234567890123458',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Jl. Waduk Ember Alamat No. 4, Kota Kediri'
        ]);
    }
}
