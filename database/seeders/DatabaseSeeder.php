<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    
    public function run(): void
    {

    \App\Models\User::factory(10)->create();
    \App\Models\Invoice::factory(10)->create();

 //   \App\Models\User::factory(10)->create({
//         'name' => 'Test User',
//         'email' => 'test@example.com',
  //      })    
    }
}
