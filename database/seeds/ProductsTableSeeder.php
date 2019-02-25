<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('products')->insert([
            'name' => 'Pull CESI' ,
            'description' => "Un bon pull bien chaud pour l'hiver !",
            'price' => 30,
            'urlImage'=> 'pull2_burned.png',
            'stock' => 25,
        ]);

        DB::table('products')->insert([
           'name' => 'Sweat à capuche BDE CESI 2017/2018' ,
           'description' => "Le classique sweat à capuche, la classe !",
           'price' => 25,
           'urlImage'=> 'pull1_burned.png',
           'stock' => 25,
       ]);

       DB::table('products')->insert([
           'name' => 'Sweat à capuche BDE CESI 2018/2019' ,
           'description' => "Nouvelle collection ! Le classique sweat à capuche !",
           'price' => 30,
           'urlImage'=> 'pull4_burned.png',
           'stock' => 25,
       ]);
    }
}
