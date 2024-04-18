@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Обьявление')
@section('keywords', 'автопродажа, магазин, телеграмм')
@section('author', 'ApXNTekToP')
@section('header')
    @include('templates.header')
@endsection
@section('content')
    @include('templates.ads.ads_content')
@endsection
@section('footer')
    @include('templates.footer')
@endsection
