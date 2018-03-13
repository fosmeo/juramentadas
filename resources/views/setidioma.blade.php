@extends('layouts.layout-dashboard')

@section('content')
    <h4>Editar no Idioma:</h4>

        <a href="{!! url('gerenciador/site/pt') !!}">Portugues</a>
        <br>
        <a href="{!! url('gerenciador/site/en') !!}">English</a>
        <br>
        <a href="{!! url('gerenciador/site/es') !!}">Español</a>
        <br>
        <a href="{!! url('gerenciador/site/it') !!}">Italiano</a>

@stop
