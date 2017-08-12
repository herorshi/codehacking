<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Role;


use App\Photo;


use App\Http\Requests\UsersRequest;

class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $user = User::all();


        return view('admin.users.index',compact('user'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        $roles = Role::pluck('name','id')->all();
        //pluck จะส่งแค่ บาง field ที่ระบุไปเท่านั้น
 
        return view('admin.users.create',compact('roles'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
        //

    //     User::create($request->all()); //add ข้อมูลจาก request
    //     return  redirect('/admin/users');

    //    return  $request->all();

        $input = $request->all();

         echo $request->file('photo_id'); // ตรงนี้เป็นที่อยู่ของไฟล์


         if($file =  $request->file('photo_id')) // get ที่อยู่file
         {

                $name = time().$file->getClientOriginalName();
                    echo "<br>".$name; //ชื่อ file

                    $file->move('images',$name); //pathเริ่มต้นจะอยู่ใน folder public


                        $photo = Photo::create(['file'=>$name]); //เท่ากับ ได้ insert และ และ query
                                                                //rowที่ insert มาดเวย

                        echo "<br><br>";
                        var_dump($photo);

                        $input['photo_id'] = $photo->id;
                        $input['password'] = bcrypt($request->password); //เข้ารหัส password


                    $ua = User::create($input);
                    echo "<br><br>";
                    var_dump($ua);

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
        return view('admin.users.show');
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
        return view('admin.users.edit');
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
