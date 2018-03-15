<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta content="" name="description" />
    <meta name="author" content="Fabricio Yassuda" />
    <meta name="keywords" content="" />

    <meta itemprop=”name” content="juramentadas.com" />
    <meta itemprop=”description” content="" />
    <meta itemprop=”image” content="" />

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Tauri" rel="stylesheet"> --}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Projeto Afeto') }}</title> --}}
    <title>juramentadas.com</title>

    <!-- Styles -->
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</head>
