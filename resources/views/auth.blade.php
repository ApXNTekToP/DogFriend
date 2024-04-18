@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Авторизация')
@section('keywords', 'автопродажа, магазин, телеграмм')
@section('author', 'ApXNTekToP')
@section('header')
    @include('templates.header')
@endsection
@section('content')
    @include('templates.auth.auth_content')
@endsection
@section('footer')
    @include('templates.footer')
@endsection
