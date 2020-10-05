<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*DB::table('users')->insert([
            'name'=>'Admin',
            'role_id'=>1,
            'email'=>'admin@gmail.com',
            'mobile_no'=>'012345678',
            'age'=> 20,
            'password' =>bcrypt('12345678'),
        ]);
        DB::table('users')->insert([
            'name'=>'Dr. Jamil',
            'role_id'=>2,
            'email'=>'dj@gmail.com',
            'mobile_no'=>'0123456789',
            'age'=>50,
            'password' =>bcrypt('rootdoctor'),
        ]);*/

        DB::table('users')->insert([
            'name'=>'Dr. Mahamudul',
            'role_id'=>2,
            'email'=>'dm@gmail.com',
            'mobile_no'=>'0122233445',
            'age'=>40,
            'password' =>bcrypt('rootdoctor1'),
        ]);

        DB::table('users')->insert([
            'name'=>'Dr. Negar',
            'role_id'=>2,
            'email'=>'dn@gmail.com',
            'mobile_no'=>'0122233446',
            'age'=>60,
            'password' =>bcrypt('rootdoctor2'),
        ]);



    }
}
