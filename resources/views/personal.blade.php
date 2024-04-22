@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Личный кабинет')
@section('keywords', 'магазин')
@section('author', 'Sofa')
@section('header')
    @include('templates.header')
@endsection
@section('content')
    @include('templates.personal.personal_content')
@endsection
@section('footer')
    @include('templates.footer')
@endsection
