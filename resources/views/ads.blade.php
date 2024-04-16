@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Обьявление')
@section('keywords', 'автопродажа, магазин, телеграмм')
@section('author', 'ApXNTekToP')
@section('content')
    @include('templates.header')
    @include('templates.ads.ads_content')
    @include('templates.footer')
@endsection
