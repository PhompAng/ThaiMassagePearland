<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'admin', 'password' => '$2y$10$yF4.PTn7jAdC4asWwqS2r.Fb2d72cGSsZsWBT6akxkDjNmmLqvYLe', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ])
    }
}
