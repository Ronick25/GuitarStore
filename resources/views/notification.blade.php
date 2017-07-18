
@extends('layouts/page')

@section('content')
	<div class="error">
		<h1>{{$notification}}</h1>
		<a href='/' ><button  class="btn btn-default">На главную</button></a>
	</div>
@endsection