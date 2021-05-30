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
                'name' => 'Smart Screen',
                'price' => '500000', 
                'category' => 'TV', 
                'description' => 'The future of television', 
                'gallery' => 'https://images.samsung.com/is/image/samsung/africa-fr-fhd-t5300-ua43t5300auxly-frontblack-243706398?$720_576_PNG$', 
                
            ],
            [
                'name' => 'Smartphone Tecno',
                'price' => '120000', 
                'category' => 'Phones', 
                'description' => 'one of the best smartphones on the market', 
                'gallery' => 'https://d316acfc88wber.cloudfront.net/global/menu-pic/phantom-icon.png', 
                
            ],
            [
                'name' => 'Bicycle',
                'price' => '80000', 
                'category' => 'Transport', 
                'description' => 'a good bicycle for all your moves', 
                'gallery' => 'https://im.qccdn.fr/node/guide-d-achat-velo-electrique-8147/inline-46131.jpg', 
                
            ]
        ]);
    }
}
