<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(IsapreTableSeeder::class);
         $this->call(SellerTableSeeder::class);

    }
}
