<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
              'name' => 'aaa',
              'email' => 'test@gmail.com',
              'url' => 'http://'.Str::random(10),
            ],
            [
              'name' => 'aaa',
              'email' => 'test@gmail.com',
              'url' => 'http://'.Str::random(10),
            ],[
              'name' => 'bbb',
              'email' => 'test2@gmail.com',
              'url' => 'http://'.Str::random(10),
            ],[
              'name' => 'bbb',
              'email' => 'test2@gmail.com',
              'url' => 'http://'.Str::random(10),
            ]
        ]);
    }
}
