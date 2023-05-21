@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
    @include('admin/flot/create')
    @include('admin/flot/table')
    
@endsection