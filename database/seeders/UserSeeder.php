<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'Ferdy Hahan Pradana',
            'email' => 'ferdyhahan5@gmail.com',
            'role_id' => 1,
            'password' => bcrypt('password'),
        ]);

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 5; $i++) {

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'role_id' => 2,
                'password' => bcrypt('password'),
            ]);
        }
    }
}
