@extends('layouts.basic-layout')
@section('title', 'DogFriend.ru - Обьявление')
@section('keywords', 'магазин')
@section('author', 'Sofa')
@section('header')
    @include('templates.header')
@endsection
@section('content')
    @include('templates.ads.ads_content')
@endsection
@section('footer')
    @include('templates.footer')
@endsection
