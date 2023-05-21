@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
    @include('admin/fact/create')
    @include('admin/fact/table')
    
@endsection