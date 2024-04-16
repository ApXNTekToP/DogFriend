@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Авторизация')
@section('keywords', 'автопродажа, магазин, телеграмм')
@section('author', 'ApXNTekToP')
@section('content')
    @include('templates.header')
    @include('templates.auth.auth_content')
    @include('templates.footer')
@endsection
