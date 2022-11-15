<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\zakat;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'admin',
            'usia' => '1',
            'email' => 'admin@gmail.com',
            'no_hp' => '081111111',
            'alamat' => 'Alamat Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);

        zakat::create([
            'id_zakat' => 'ZK01',
            'kategori_zakat' => 'Zakat Penghasilan',
        ]);
        zakat::create([
            'id_zakat' => 'ZK02',
            'kategori_zakat' => 'Zakat Fitrah',
        ]);
    }
}
