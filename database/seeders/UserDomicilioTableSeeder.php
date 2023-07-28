<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserDomicilioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numberUsers = 100;
        \App\Models\UserDomicilio::factory($numberUsers)->create();
    }
}
