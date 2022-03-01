@extends('template')

@section('title')
    Article {{$name}}
@endsection



@section('content_title')
    Article {{$name}}!
@endsection

@section('content')
    Here's the article {{$name}}'s description:
@endsection