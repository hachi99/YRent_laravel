@extends('layouts.app')

@section('template_title')
    {{ $subscrip->name ?? 'Show Subscrip' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subscrip</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subscrips.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $subscrip->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $subscrip->email }}
                        </div>
                        <div class="form-group">
                            <strong>Telephone:</strong>
                            {{ $subscrip->telephone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
