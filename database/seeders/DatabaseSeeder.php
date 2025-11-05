<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // \Illuminate\Support\Facades\DB::table('services')->insert([
        //     [
        //         'service_name' => 'Mobile Application',
        //     ],
        //     [
        //         'service_name' => 'Website',
        //     ],
        // ]);

        // \Illuminate\Support\Facades\DB::table('users')->insert([
        //     [
        //         'name' => 'Admin',
        //         'email' => 'admin@djingga.com',
        //         'password' => bcrypt('admin123'),
        //     ],
        // ]);

        \Illuminate\Support\Facades\DB::table('category_activities')->insert([
            [
                'category_name' => 'category a',
            ],
            [
                'category_name' => 'category b',
            ],
        ]);
    }
}
