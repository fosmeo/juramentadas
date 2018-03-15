@extends('layouts.layout-dashboard')

@section('content')
    <h4>Editar no Idioma:</h4>

        <a href="{!! url('gerenciador/pt') !!}">Portugues</a>
        <br>
        <a href="{!! url('gerenciador/en') !!}">English</a>
        <br>
        <a href="{!! url('gerenciador/es') !!}">Español</a>
        <br>
        <a href="{!! url('gerenciador/it') !!}">Italiano</a>

@stop
