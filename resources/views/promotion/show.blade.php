@extends('layouts.app')

@section('template_title')
    {{ $promotion->name ?? 'Show Promotion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Promotion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('promotions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Type:</strong>
                            {{ $promotion->type }}
                        </div>
                        <div class="form-group">
                            <strong>Detail:</strong>
                            {{ $promotion->detail }}
                        </div>
                        <div class="form-group">
                            <strong>Validity:</strong>
                            {{ $promotion->validity }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
