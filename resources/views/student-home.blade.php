
@extends('layout.app')

@section('title')
{{ setting('site.title')}}
@endsection

@section('content')
    <!--===============================================-->
    @include('page');
    <!--===============================================-->
@endsection
