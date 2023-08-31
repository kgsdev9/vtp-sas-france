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
    public function run()
    {

         $this->call(RoleSeeder::class);
         \App\Models\Seller::factory(6)->create();
         \App\Models\User::factory(100)->create();
;
          \App\Models\Product::factory(100)->create();



    }
}
