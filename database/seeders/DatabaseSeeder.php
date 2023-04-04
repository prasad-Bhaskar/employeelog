<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'id' => Str::uuid()->toString(),
            'name' => 'Rahul Soni',
            'email' => 'rahulsonikorba@gmail.com',
            'mobile' => '7999585307',
            'is_admin' => 1,
            'gender' => 'male',
            'pin' => 1234,
            'password' => Hash::make('Rahul@123')
        ]);
    }
}
