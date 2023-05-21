@extends('layouts.app')

@section('template_title')
    {{ $fact->name ?? 'Show Fact' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Fact</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $fact->rfc }}
                        </div>
                        <div class="form-group">
                            <strong>Reserv Id:</strong>
                            {{ $fact->reserv_id }}
                        </div>
                        <div class="form-group">
                            <strong>Custom Id:</strong>
                            {{ $fact->custom_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
