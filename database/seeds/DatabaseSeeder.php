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
        // $this->call(UsersTableSeeder::class);

        $this->call(BloodGroupSeeder::class);
       // factory(App\BloodGroup::class,8)->create();
        factory(App\Donor::class,20)->create();

    }

}
