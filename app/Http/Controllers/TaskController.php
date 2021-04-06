<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreTaskRequest;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $tasks=Task::get();
        // 1 task sẽ thuộc về 1 user
        // 
        $tasks=Task::with('user')
            ->paginate(3);
            // users ko su dung nen co the REMOVE 
        // $users = User::pluck('name','id')
        //     ->toArray();
        // $data['users'] = $users;
        $data['tasks'] = $tasks;
        // dd($data);
        return view('tasks.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $DataInsert=[];
        $users = User::pluck('name', 'id')->toArray();
        $DataInsert['users']=$users;
        return view('tasks.create', $DataInsert);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {
        $taskInsert=[
            'content'=>$request->content,
            'user_id'=>$request->user_id,
        ];
        dd($taskInsert);
        DB::beginTransaction();
        try{
            Task::create($taskInsert);
            DB::commit();
            return redirect()->route('task.index')->with('sucess', 'Insert into data to User Sucessful.');
        }catch(\Exception $ex){
            DB::rollBack();
            Log::error($ex->getMessage());
            return redirect()->back()->with('error', $ex->getMessage());
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
