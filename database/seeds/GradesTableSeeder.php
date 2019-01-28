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
            // 'id' => 1,
             'role' => 'Etudiant' ,  
         ]);

         DB::table('grades')->insert([
            // 'id' => 1,
             'role' => 'Salarie' ,  
         ]);

         DB::table('grades')->insert([
            // 'id' => 1,
             'role' => 'Admin' ,  
         ]);
    }
}
