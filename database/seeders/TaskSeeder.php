<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Boolean;
use Illuminate\Support\Str;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users')->get();
        if(!empty($users)){
            $date = date('Y-m-d H:i:s');
            foreach ($users as $user){
                $dataInsert=[
                    ['content'=>'sdjasđajasđá',
                    'user_id'=>$user->id,
                    'status'=>'1',
                    ],
                    ['content'=>'sdjasđajđsấdasđá',
                    'user_id'=>$user->id,
                    'status'=>'0',
                    ]
                ];
                DB::table('tasks')->insert($dataInsert);
            }
        }
    }
}
