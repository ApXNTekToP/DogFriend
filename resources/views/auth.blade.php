@extends('layouts.basic-layout')
@section('title', 'Вход в личный кабинет')
@section('keywords', 'магазин', 'вход', 'кабинет')
@section('author', 'Sofa')
@section('content')
    @include('templates.auth.auth_content')
@endsection
