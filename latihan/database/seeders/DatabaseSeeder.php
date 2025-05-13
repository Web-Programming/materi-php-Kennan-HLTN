<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use DB;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      //menggunakan query builder
      //ini untuk insert data ke dalam tabel users
      //DB::table("users")->insert([
        //'name' => "vionetha",
        //'email' => "vionetha2085@gmail.com",
        //'password'=> Hash::make("password"),
      //]);
      //fungsi insert() untuk menambah data(new record) ke dalam database
      //sama seperti menjalankan fungsi insert into di sql workbench

      //mengupdate data
      DB::table("users")
      ->where("id", 1)
      ->update([
        'password' => Hash::make("123456")
        ]);

        //menghapus data
        //DB::table("users")->where("id", 1)->delete();
    }
}
