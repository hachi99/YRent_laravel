@extends('layouts.app')

@section('template_title')
    {{ $insurcar->name ?? 'Show Insurcar' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Insurcar</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('insurcars.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $insurcar->type }}
                        </div>
                        <div class="form-group">
                            <strong>Characteristic:</strong>
                            {{ $insurcar->characteristic }}
                        </div>
                        <div class="form-group">
                            <strong>Cost:</strong>
                            {{ $insurcar->cost }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
