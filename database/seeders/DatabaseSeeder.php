<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Employee::factory()->create([
            'first_name' => 'Uc',
            'last_name' => 'Tuyen',
            'email' => 'pnt22497@gmail.com',
            'account_id' => '1',
            'password' => Hash::make('123'),
            'email_verified_at' => now(),
        ]);
    }
}
