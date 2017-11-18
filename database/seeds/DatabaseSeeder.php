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
            'name' => 'Name',
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('products')->insert([
            'name' => 'Платье Paradise',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 500,
            'price' => 400,
            'anons' => 'Платье с карманами. Носите с пляжной обувью...',
            'text' => ' Платье с карманами. Носите с пляжной обувью...',
            'cat_id' => 2,
            'img' => 'a9602c59a600256d93312acee27c23ac.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Домашнее платье sOrnella',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 800,
            'price' => 700,
            'anons' => 'Хлопковое платье свободного кроя',
            'text' => 'Хлопковое платье свободного кроя',
            'cat_id' => 2,
            'img' => 'fb769ee1dcfdf13dde2d34669467c537.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Лонгслив Match',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 700,
            'price' => 300,
            'anons' => 'Мужской лонгслив силуэта slim. Выполнен из гипоаллергенного хлопка.',
            'text' => 'Мужской лонгслив силуэта slim. Выполнен из гипоаллергенного хлопка.',
            'cat_id' => 1,
            'img' => '16db723236658bc9448357544fb9ca75.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Футболка KANGAROOS',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 500,
            'price' => 400,
            'anons' => 'Прорезиненный принт-логотип Круглый вырез и короткие рукава',
            'text' => 'Прорезиненный принт-логотип Круглый вырез и короткие рукава',
            'cat_id' => 1,
            'img' => '18674533_mmdb.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Экран для проекторов',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 125,
            'price' => 75,
            'anons' => 'Формат видимой области экрана легко варьируется, так...',
            'text' => 'Формат видимой области экрана легко варьируется, так...',
            'cat_id' => 3,
            'img' => '7269_img2.jpg '
        ]);

        DB::table('products')->insert([
            'name' => 'Магнитола Mystery BM-6008UB ',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 125,
            'price' => 75,
            'anons' => 'Эта компактная, удобная и очень простая в управлении модель...',
            'text' => 'Эта компактная, удобная и очень простая в управлении модель....',
            'cat_id' => 3,
            'img' => '56631_img2.jpg '
        ]);

        DB::table('products')->insert([
            'name' => 'Диван кухонный',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 750,
            'price' => 500,
            'anons' => 'Формат видимой области экрана легко варьируется, так...',
            'text' => 'Формат видимой области экрана легко варьируется, так...',
            'cat_id' => 4,
            'img' => 'img_9753_1.jpg'
        ]);

        DB::table('products')->insert([
            'name' => 'Комплект обеденный, стол + 4 стула',
            'raiting' => 5,
            'view' => 3,
            'old_price' => 554,
            'price' => 487,
            'anons' => 'Формат видимой области экрана легко варьируется, так...',
            'text' => 'Формат видимой области экрана легко варьируется, так...',
            'cat_id' => 4,
            'img' => '184601_2834_2734.jpg'
        ]);
       
        DB::table('category')->insert([
            
            'title' => 'Men',
         ]);
         
        DB::table('category')->insert([
            'title' => 'Women',
        ]);

        DB::table('category')->insert([
            'title' => 'Electronics',
        ]);

        DB::table('category')->insert([
            'title' => 'Furniture',
        ]);

        DB::table('cart')->insert([
            'user_id' => 1,
            'product_id' =>1,
            'product_price' => 500,
            'product_title' => 'mencloth',
            'product_img' => '18674533_mmdb.jpg',
        ]);
        
    }
}
