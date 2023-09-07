<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
                'name' => 'レシピ名',
                'body' => 'レシピについての前置き',
                'time' => 30,
                'calorie' => 100,
                'cost'=>1000,
                'resource_id'=>1,
                'step_id'=>1,
                'user_id'=>1,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
