<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use App\Models\Category;

use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $data = [];
        // get list data of table posts
        $posts = Post::with('category');

        // add new param to search
        // search post name
        if (!empty($request->name)) {
            $posts = $posts->where('name', 'like', '%' . $request->name . '%');
        }

        // search category_id
        if (!empty($request->category_id)) {
            $posts = $posts->where('category_id', $request->category_id);
        }
        
        // pagination
        $posts = $posts->paginate(2);

        // get list data of table categories
        $categories = Category::pluck('name', 'id')
            ->toArray();
        $data['categories'] = $categories;
        // dd($posts);
        $data['posts'] = $posts;
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dataInsert = [];
        $categories = Category::pluck('name', 'id')->toArray();
        $dataInsert['categories'] = $categories;
        return view('posts.create', $dataInsert);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        dd($request);

        $thumbnailPath = null;
        if ($request->hasFile('thumbnail') 
            && $request->file('thumbnail')->isValid()) {
            // Nếu có thì thục hiện lưu trữ file vào public/images
            $images = $request->file('thumbnail');
              //luwu tru folder
            $thumbnailPath = $images->move('thumbnail', $images->getClientOriginalName());
        }

        $dataInsert = [
            'name' => $request->name,
            'thumbnail' => $thumbnailPath,
            'category_id' => $request->category_id,
        ];

        DB::beginTransaction();

        try {
            Post::create($dataInsert);

            DB::commit();

            // success
            return redirect()->route('post.index')->with('success', 'Insert successful!');
        } catch (\Exception $ex) {
            DB::rollback();

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
        return view('posts.detail', ['post' => Post::findOrFail($id)]);
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
        $post = Post::findOrFail($id);
        $categories = Category::pluck('name', 'id')->toArray();
        $data['posts'] = $post;
        $data['categories'] = $categories;
        return view('posts.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $post = Post::find($id);
            $post->name = $request->name;
            $post->content = $request->content;
            $post->category_id = $request->category_id;

            $post->save();
            DB::commit();
            return redirect()->route('post.index')->with('success', 'Insert Post seccessful');
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
            $post = Post::find($id);
            $post->delete();

            DB::commit();

            return redirect()->route('post.index')
                ->with('success', 'Delete Post successful!');
        } catch (\Exception $ex) {
            DB::rollBack();
            // have error so will show error message
            return redirect()->back()->with('error', $ex->getMessage());
        }
    }
}
