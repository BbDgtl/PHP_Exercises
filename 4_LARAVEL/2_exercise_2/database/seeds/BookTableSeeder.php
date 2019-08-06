<?php

use Illuminate\Database\Seeder;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('book')->insert([
                'author' => 'Author' . $i,
                'title' => 'My Title' . $i,
            ]);
        }
    }
}
