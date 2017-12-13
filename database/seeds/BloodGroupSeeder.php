<?php

use Illuminate\Database\Seeder;

class BloodGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \App\BloodGroup::create(['A']);
        DB::table('Blood_Groups')->insert([
        'bloodtype'=>'AB+'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'AB-'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'A+'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'A-'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'B+'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'B-'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'O+'
        ]);
        DB::table('Blood_Groups')->insert([
            'bloodtype'=>'O-'
        ]);
    }
}
