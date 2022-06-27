<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    /**Calling the Admin class for Seeder class */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(Admin::class);   
    }
}
