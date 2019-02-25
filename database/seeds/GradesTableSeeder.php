<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
             'role' => 'Etudiant' ,  
         ]);

         DB::table('grades')->insert([
             'role' => 'Salarie' ,  
         ]);

         DB::table('grades')->insert([
             'role' => 'Admin' ,  
         ]);
    }
}
