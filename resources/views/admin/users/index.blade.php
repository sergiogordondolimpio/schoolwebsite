@extends('adminlte::page')

@section('title', 'School Website')

@section('content_header')
    <h1>List Users</h1>
@stop

@section('content')
    @livewire('admin-users')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop