<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
    //    DB::table("users") -> insert([
    //         'name' => 'berlian wanna',
    //         'email' => 'berlian.wanna@gmail.com',
    //         'password' => Hash::make("password")
    //     ]);

        DB::table("users") -> where ("id",1) -> update([
           
            'password' => Hash::make("123456")
        ]);
    }
}
