<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Danar Wijanarko',
            'username' => 'dnoobody',
            'email' => 'danarwijanarko98@gmail.com',
            'password' => bcrypt('Kowe213345')
        ]);

        User::factory(2)->create();

        $this->call([
            // PostSeeder::class,
            CategorySeeder::class
        ]);

        Post::factory(25)->create();
    }
}
