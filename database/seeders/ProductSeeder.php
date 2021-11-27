<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iphone 13',
                'price' => '450',
                'category' => 'tech',
                'description' => 'this a Smart phone with a lot of feature, having 4gb ram and 256gb built in storage',
                'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-13-pro-max-01.jpg',
            ],
            [
                'name' => 'iphone 9',
                'price' => '300',
                'category' => 'tech',
                'description' => 'this a Smart phone with a lot of feature, having 4gb ram and 256gb built in storage',
                'gallery' => 'https://i.gadgets360cdn.com/large/iphone_8_apple_full_1575871404199.jpg?',
            ], [
                'name' => 'iphone 11',
                'price' => '290',
                'category' => 'tech',
                'description' => 'this a Smart phone with a lot of feature, having 4gb ram and 256gb built in storage',
                'gallery' => 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-black-select-2019?wid=470&hei=556&fmt=png-alpha&.v=1566956144418',
            ], [
                'name' => 'iphone 10',
                'price' => '150',
                'category' => 'tech',
                'description' => 'this a Smart phone with a lot of feature, having 4gb ram and 256gb built in storage',
                'gallery' => 'https://images.unsplash.com/photo-1604664585494-b3451ede482b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=465&q=80',
            ], [
                'name' => 'iphon 6',
                'price' => '323',
                'category' => 'tech',
                'description' => 'this a Smart phone with a lot of feature, having 4gb ram and 256gb built in storage',
                'gallery' => 'https://images.unsplash.com/photo-1595392029731-a6a252df1fd1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80',
            ],

        ]);
    }
}
