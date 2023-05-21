@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
    @include('admin/promotion/create')
    @include('admin/promotion/table')
    
@endsection