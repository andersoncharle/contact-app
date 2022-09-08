<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //  first remove all records and set the id to zero
       // DB::table('companies')->truncate();
        $companies = [];
        $faker = Faker::create();

        foreach (range(1, 15) as $ignored) {
            $companies[] = [
                'name' => $faker->company,
                'address' => $faker->address,
                'website' => $faker->domainName,
                'email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now(),

            ];
        }
        DB::table('companies')->insert($companies);
    }
}
