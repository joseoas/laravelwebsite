<?php

use Illuminate\Database\Seeder;

class IsapreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(App\Models\Isapre::class,7)->create();
    }
}
