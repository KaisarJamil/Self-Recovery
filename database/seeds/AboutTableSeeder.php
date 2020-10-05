<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('abouts')->insert([
            'user_id'=>1,
            'role_id'=>3,
            'name'=>'A',
            'email'=>'a@gmail.com',
            'mobile_no'=>'01234567',
            'age'=>20,
            'description'=>'Testing Testing',
        ]);

        DB::table('abouts')->insert([
            'user_id'=>3,
            'role_id'=>2,
            'name'=>'Dr. Jamil',
            'email'=>'dj@gmail.com',
            'mobile_no'=>'012345678',
            'age'=>50,
            'description'=>'MBBS From DMC',
        ]);*/

        DB::table('abouts')->insert([
            'user_id'=>4,
            'role_id'=>2,
            'name'=>'Dr. Mahamudul',
            'email'=>'dm@gmail.com',
            'mobile_no'=>'0122233445',
            'age'=>40,
            'description'=>'MBBS From DMC',
        ]);

        DB::table('abouts')->insert([
            'user_id'=>5,
            'role_id'=>2,
            'name'=>'Dr. Negar',
            'email'=>'dn@gmail.com',
            'mobile_no'=>'0122233446',
            'age'=>60,
            'description'=>'MBBS From DMC',
        ]);
    }
}
