<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Fran',
            'email' => 'fran@fran.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(99)->create();
    }
}
