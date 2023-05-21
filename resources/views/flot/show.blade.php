@extends('layouts.app')

@section('template_title')
    {{ $flot->name ?? 'Show Flot' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Flot</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('flots.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Details:</strong>
                            {{ $flot->details }}
                        </div>
                        <div class="form-group">
                            <strong>Passenger:</strong>
                            {{ $flot->passenger }}
                        </div>
                        <div class="form-group">
                            <strong>Doors:</strong>
                            {{ $flot->doors }}
                        </div>
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $flot->cost }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
