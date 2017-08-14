<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Post;

use App\Photo;

use App\User;

use App\Http\Requests\PostCreateRequest;

class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $posts = Post::all();


        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      //  $post =  App\Post::create(['title'=>'AAA','body'=>'BBBB']); //field อื่นๆ ต้องมีค่า auto

       // $post = App\Post::delete();

        //echo $post;
        return view('admin.posts.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostCreateRequest $request)
    {
        //

        $input = $request->all();

      
        $user = Auth::user();
      //  var_dump(Auth::id());
        //var_dump($input);

        

        if($file = $request->file('photo_id'))

        {

        $name = time().$file->getClientOriginalName();

        $file->move('images',$name);

        $photo = Photo::create(['file'=>$name]);

        $input['photo_id'] = $photo->id;

        }


        $user->posts()->create($input);

  //      return response()->json(['error'=>"Unauthenticated."],401);

        /* 

        response()->json([]) ทำให้ array เป็น json
        */

        return redirect('/admin/posts');

     //   return  $request->all();

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
