@extends('template')

@section('title')
    Articles
@endsection

@section('content_title')
    Article 
@endsection

@section('content')
    <a href="{{ url('/product/{id}') }}"> Click here for the article!</a>
@endsection