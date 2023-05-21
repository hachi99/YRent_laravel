@extends('admin/dashboard/index')
@section('titulo','modulo inicio')
    
@section('contenido')
    @include('admin/insurcar/create')
    @include('admin/insurcar/table')
    
@endsection