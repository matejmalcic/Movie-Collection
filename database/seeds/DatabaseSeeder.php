<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(GenresSeeder::class); 
        DB::table('genres')->insert([
            ['name' => 'Action'], 
            ['name' => 'Adventure'], 
            ['name' => 'Comedy'],
            ['name' => 'Crime'],
            ['name' => 'Drama'],
            ['name' => 'Fantasy'],
            ['name' => 'History'],
            ['name' => 'Horor'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'SF'],
            ['name' => 'Thriller'],
            ['name' => 'Western'],
        ]);
        
    }
}
