@extends('layouts.app')

@section('template_title')
    {{ $offic->name ?? 'Show Offic' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Offic</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('offics.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Place Name:</strong>
                            {{ $offic->place_name }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $offic->address }}
                        </div>
                        <div class="form-group">
                            <strong>Telephone:</strong>
                            {{ $offic->telephone }}
                        </div>
                        <div class="form-group">
                            <strong>Schedule:</strong>
                            {{ $offic->schedule }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
