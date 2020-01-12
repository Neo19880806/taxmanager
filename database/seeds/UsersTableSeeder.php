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
        DB::table('users')->insert([
            'name' => 'neo1988',
            'email' => '245891559@qq.com',
            'password' => Hash::make('password'),
        ]);
    }
}
