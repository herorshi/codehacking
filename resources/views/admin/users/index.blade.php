@extends('layouts.admin')



@section('content')

 @if(Session::has('deleted_user'))

 <p> 

 {{session('deleted_user')}}

 </p>


 @endif
 <h1>Users</h1>

<table class="table table-condensed">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>photo</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Create</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>

 
 @if($user)

 @foreach($user as $userx)
      <tr>
        <td>{{$userx->id}}</td>
        <td> <a  href="{{route('users.edit',$userx->id)}}">{{$userx->name}}</a></td>
        <td>
        <!--  {{$userx->photo ? $userx->photo['file'] : 'Not image user' }} -->
           <img src=" {{$userx->photo ? $userx->photo['file'] : 'http://placehold.it/400x400' }} " width="100" height="50"> </td>
           	 {{-- pathเริ่มต้นที่ public --}}

        <td>{{$userx->email}}</td>
        <td> {{$userx->role->name}}  </td> 
         {{--  roleคือ functionของ user ที่ query ข้อมูลเข้ามา nameคือข้อมูลข้างในอีกที   --}}
            <td> {{$userx->is_active == 1 ? 'Active' : 'Not Active' }} </td> 
            {{--  $userx->is_active == 1 ? 'Active' : 'No_Active' 
            ถ้าค่า is_active เป็น 1 จะมีค่า เป็น Active แต่ถ้าไม่ใช่ จะมีค่า เป็น No_Active
              --}}

        <td>{{$userx->created_at->diffForHumans()}}</td>
        <td>{{$userx->updated_at->diffForHumans()}}</td>
      </tr>
 {{-- diffForHumans() บอกเป็นภาษาคนเข้าใจของวันล่าสุด  --}}
 @endforeach

@endif


    </tbody>
  </table>

@stop