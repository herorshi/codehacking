@extends('layouts.admin')







@section('content')

	<h1> Posts </h1>


	<table class="table">
		<thead>
	<tr>
		<th  style="text-align: center;">ID</th>
		<th style="text-align: center;">User</th>
		<th style="text-align: center;">category</th>
		<th style="text-align: center;">Photo</th>
		<th style="text-align: center;">Titile</th>
		<th style="text-align: center;">body</th>
		<th style="text-align: center;">Created</th>
		<th style="text-align: center;">Update</th>
	

	</tr>
		</thead>

		<tbody> 
		@if($posts)

			@foreach($posts as $post)

				<tr>
					<td align="center">{{$post->id}}</td>
					<td align="center">{{$post->user->name}}</td>
					<td align="center">{{$post->category_id}}</td>
					<td align="center"><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" width="100" height="50"></td>
					<td align="ceneter">{{$post->title}}</td>
					<td align="center">{{$post->body}}</td>
					<td align="center">{{$post->created_at->diffForHumans()}}</td>
					<td align="center">{{$post->updated_at->diffForHumans()}}</td>
				</tr>





			@endforeach

		@endif	







		</tbody>





	</table>



@stop