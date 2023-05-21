@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
    @include('admin/reserv/create')
    @include('admin/reserv/table')
    
@endsection