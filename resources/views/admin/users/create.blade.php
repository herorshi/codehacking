@extends('layouts.admin')


@section('content')


	<h1> Create_user </h1>

	{!!  Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true])   !!}

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
			{!! Form::select('status',array(''=>'***plase Select***',1=>'active',0=>'Not Active'),0,['class'=>'form-control']) !!}

{{--  Form::select('name',array(value=>'textshow'),null,['class'=>'form-control']) --}}

	</div>

		<div class="form-group">
			{!! Form::label('file','File:') !!}
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


@stop

{{-- กรณีที่ไม่ต้อง ใช้ php artisan  migrate:refresh มันจะล้างข้อมูลเก่าออก แต่อากเพิ่ม field  --}}


{{-- ให้ใช้คำสั่ง php artisan  make:migration add_pho_id_to_users --table=ชื่อtableที่จะเพิ่ม  --}}