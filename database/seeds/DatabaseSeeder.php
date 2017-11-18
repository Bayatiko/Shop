<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('products')->insert([
            'name' => str_random(10),
            'raiting' => random_int(1, 5),
            'view' => random_int(1, 5),
            'old price' => random_int(1, 5),
            'price' => random_int(1, 5),
            'anons' => str_random(10),
            'text' => str_random(10),
            'cat_id' => random_int(1, 4),
            'img' => str_random(10).'.jpg',
        ]);

        DB::table('category')->insert([
            'title' => str_random(10),
            
        ]);
        DB::table('cart')->insert([
            'user_id' => random_int(1, 5),
            'product_id' => random_int(1, 5),
            'product_price' => random_int(1, 5),
            'product_title' => str_random(10),
            'product_img' => str_random(10).'.jpg',
            
        ]);
    }
}
