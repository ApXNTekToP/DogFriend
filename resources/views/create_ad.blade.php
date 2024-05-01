@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Создать объявление')
@section('keywords', 'магазин', 'создать', 'обьявление')
@section('author', 'Sofa')
@section('header')
    @include('templates.header')
@endsection
@section('content')
    @include('templates.ads.create_ad_content')
@endsection
@section('footer')
    @include('templates.footer')
@endsection
