<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $data = [
            ['name'=>'Tran Tan Hieu','email'=>'Hieutran2803@gmail.com','password'=>'12345','created_at' => $date, 'updated_at' => $date],
            ['name'=>'Nguyen Van A','email'=>'Hieutran2803@gmail.com','password'=>'12345','created_at' => $date, 'updated_at' => $date],
            ['name'=>'Tran Tan C','email'=>'Hieutran2803@gmail.com','password'=>'12345','created_at' => $date, 'updated_at' => $date]

        ];
        DB::table('users')->insert($data);
        
    }
}
