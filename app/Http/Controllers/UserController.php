<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[];
        $users=User::get();
        $users=User::paginate(5);

        $data['users']=$users;
        return view('users.index',$data);



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[];
        return view('users.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        $userInsert=[
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        DB::beginTransaction();
        try{
            User::create($userInsert);
            DB::commit();
            return redirect()->route('user.index')->with('sucess', 'Insert into data to User Sucessful.');
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
        return view('users.detail', ['user' => User::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $user = User::findOrFail($id);
        $data['user'] = $user;
        return view('users.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUserRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = $request->password;

            $user->save();
            DB::commit();
            return redirect()->route('user.index')->with('success', 'Insert User seccessful');
        } catch (\Throwable $ex) {
            DB::rollBack();
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $user = User::find($id);
            $user->delete();

            DB::commit();

            return redirect()->route('user.index')
                ->with('success', 'Delete User successful!');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
