<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Ghazi',
            'email' => 'ghaziislam3@gmail.com'
        ]);
        User::factory()->create([
            'name' => 'Bish',
            'email' => 'bish@gmail.com'
        ]);
        User::factory(10)->create();
    }
}
