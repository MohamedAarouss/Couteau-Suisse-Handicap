<?php

namespace Database\Seeders;

use App\Models\Ent;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(50)->create();
        News::factory(100)->create();
        Ent::factory(1)->create();
    }
}
