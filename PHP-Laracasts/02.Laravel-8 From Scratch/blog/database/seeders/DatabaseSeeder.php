<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {     
       $user=\App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        \App\Models\Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
    //     \App\Models\User::truncate();
    //     \App\Models\Catagory::truncate();
    //   \App\Models\User::factory()->create();

        
    }
}
