<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        DB::table('articles')->insert([
            'title'       => $faker->colorName(),
            'intro'       => $faker->text(50),
            'image' => $faker->text(),
            'published'        => 1,
        ]);
    }
}
