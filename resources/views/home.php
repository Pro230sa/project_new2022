@extends('layout.app')

@section('title')
{{ config('app.name', 'Emad Slahi') }}
@endsection

@section('content')
<!--===============================================-->
@include('page');
<!--===============================================-->
@endsection
