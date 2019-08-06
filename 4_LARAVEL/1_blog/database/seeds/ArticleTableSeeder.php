<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('articles')->insert([
                'title' => 'My Title' . $i,
                'description' => Str::random(50)
            ]);
        }
    }
}
