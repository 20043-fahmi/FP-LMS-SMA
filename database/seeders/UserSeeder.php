<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Jakarta');

        $users =  [
            [
                'name' => 'coba',
                'email' => 'coba@gmail.com',
                'password' => bcrypt('coba12345'),
                'role' => 'siswa',
            ],
        ];

        foreach ($users as $key => $value) {
            User::create($value);
        }
    }
}
