@extends('layout')

@section('content')
	 @foreach($articles as $article)
		<p>{{ $article->title }}{{ $article->content}}</p>
	 @endforeach
@stop