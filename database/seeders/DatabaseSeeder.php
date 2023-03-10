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
            'nama_muzakki' => 'admin',
            'email' => 'admin@gmail.com',
            'no_hp' => '081111111',
            'alamat' => 'Alamat Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
        User::factory()->create([
            'nama_muzakki' => 'Pydydyn',
            'email' => 'Pydydyn@gmail.com',
            'no_hp' => '081111111',
            'alamat' => 'Alamat Pydydyn',
            'username' => 'Pydydyn',
            'password' => bcrypt('774299421196061594558258214156586648Xz'),
            'role' => 'admin',
        ]);
    }
}
