<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tag::factory(50)->create();
        DB::table('tags')->insert([
            'code' => 'ABCDEF',
            'link' => 'https://www.google.com/url?sa=t&source=web&rct=j&url=https://nl.linkedin.com/in/mees-wesseling-24547a1a4&ved=2ahUKEwjqntTF_tv1AhUXwQIHHQpqD2kQFnoECAMQAQ&usg=AOvVaw2GtjwS1keqXOiR7_npvHAA'
        ]);
    }
}
