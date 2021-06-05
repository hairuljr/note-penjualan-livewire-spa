<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Onong',
            'email' => 'onong@email.bengkel',
            'email_verified_at' => now(),
            'password' => Hash::make('paknong'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
