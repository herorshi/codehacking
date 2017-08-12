@extends('layouts.admin')


@section('content')


	<h1> Edit_user </h1>

		<div class="col-sm-3">


				<img src="{{$user->photo ? $user->photo['file'] : 'http://placehold.it/400x400' }}" alt="" class="img-responsive img-rounded" width="100" height="100">

		</div>


	<div class="col-sm-9"> 

   {{-- $user --}}
   	{{-- การใช้ model จะทำให้ text ที่มีname ตรงกับชื่อในarrayของตัวแปรที่ใส่ไปใน model  textนั้นมีค่า เดียวกับ indexใน array ที่ใส่ใน model
   	  ชื่อnameกับชื่อ indexตัวไหนที่ตรงกันมันจะใส่ค่า ให้ text --}}

	{!!  Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true])   !!}

		<div class="form-group">
			{!! Form::label('name','Name:') !!}
			{!! Form::text('name',null,['class'=>'form-control']) !!}
		</div>

	<div class="form-group">
			{!! Form::label('email','Email:') !!}
			{!! Form::email('email',null,['class'=>'form-control']) !!}
	</div>

		<div class="form-group">
			{!! Form::label('role_id','Role:') !!}
			{!! Form::select('role_id',[''=>'Choose Options'] + $roles ,null,['class'=>'form-control']) !!}
				{{-- +$roles ตรงนี้เป็นค่า array ใส่ select ได้เลย จะมี2ค่าคือ name,id ตัวแรกจะเป็นค่าใน option ตัวที่2จะเป็น value option  --}}

	</div> 

	<div class="form-group">
			{!! Form::label('status','Status:') !!}
			{!! Form::select('status',array(''=>'***plase Select***',1=>'active',0=>'Not Active'),null,['class'=>'form-control']) !!}

{{--  Form::select('name',array(value=>'textshow'),null,['class'=>'form-control']) --}}

	</div>

		<div class="form-group">
			{!! Form::label('photo_id','Photo_id:') !!}
			{!! Form::file('photo_id',['class'=>'form-control']) !!}
		</div>


		<div class="form-group">
			{!! Form::label('password','Password:') !!}
			{!! Form::password('password',['class'=>'form-control']) !!}
			 {{-- password จะไม่มีค่า value เริ่มต้น  --}}
		</div>


		<div class="from-group">
		{!! Form::submit('Create User',['class'=>'btn-primary']) !!}
		</div>


		{!!  Form::close()  !!}
@include('includes.includes_test') 
  {{-- path include จะเริ่มต้นที่  folder view เสมอ  --}}

</div> 
@stop

{{-- กรณีที่ไม่ต้อง ใช้ php artisan  migrate:refresh มันจะล้างข้อมูลเก่าออก แต่อากเพิ่ม field  --}}


{{-- ให้ใช้คำสั่ง php artisan  make:migration add_pho_id_to_users --table=ชื่อtableที่จะเพิ่ม  --}}