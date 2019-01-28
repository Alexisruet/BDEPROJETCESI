<?php

use Illuminate\Database\Seeder;

class CentresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
	    	DB::table('centres')->insert([
	           // 'id' => 1,
	            'city' => 'Bordeaux' ,  
            ]);
            
            DB::table('centres')->insert([
	            //'id' => 2,
	            'city' => 'Rouen' ,  
            ]);
            
            DB::table('centres')->insert([
                // 'id' => 3,
                 'city' => 'Pau' ,  
             ]);

            DB::table('centres')->insert([
	           // 'id' => 3,
	            'city' => 'Paris' ,  
            ]);
            
    }
}
