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
	            'city' => 'Aix-En-Provence' ,  
            ]);
            
            DB::table('centres')->insert([
	            //'id' => 2,
	            'city' => 'Angoulême' ,  
            ]);
            
            DB::table('centres')->insert([
                // 'id' => 3,
                 'city' => 'Arras' ,  
             ]);

            DB::table('centres')->insert([
	           // 'id' => 3,
	            'city' => 'Bordeaux' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Brest' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Caen' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Châteauroux' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Dijon' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Grenoble' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'La Rochelle' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Le Mans' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Lille' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Lyon' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Montpellier' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Nancy' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Nantes' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Nice' ,  
            ]);
            
            DB::table('centres')->insert([
	            'city' => 'Orléans' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Paris Nanterre' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Pau' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Reims' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Rouen' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Saint-Nazaire' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Strasbourg' ,  
            ]);

            DB::table('centres')->insert([
	            'city' => 'Toulouse' ,  
            ]);
    }
}
