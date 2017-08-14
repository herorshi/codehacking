@extends('layouts.admin')







@section('content')

	<h1>Create Posts </h1>
 {!! Form::open(['methods'=>'POST','action'=>'AdminPostsController@store','files'=>true])  !!}
 		



 		<div class="form-group">
 		{!! Form::label('title','Title') !!}
 		{!! Form::text('title',null,['class'=>'form-control']) !!}
 		</div>


 		<div class="form-group">
 		{!! Form::label('category','Category:') !!}
 		{!! Form::select('category_id',array(''=>'options'),null,['class'=>'form-control']) !!}
 		</div>


 		<div class="form-group">
 		{!! Form::label('photo_id','Title') !!}
 		{!! Form::file('photo_id',['class'=>'form-control']) !!}

 		</div>


 		<div class="form-group">
 		{!! Form::label('body','Description:') !!}
 		{!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
 		</div>


 		<div class="form-group">
 		{!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
 
 		</div>




{!! Form::close() !!}


	<div  class="row">

	@include('includes.includes_test')

	</div>





@stop