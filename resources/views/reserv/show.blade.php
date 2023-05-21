@extends('layouts.app')

@section('template_title')
    {{ $reserv->name ?? 'Show Reserv' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reserv</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reservs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Offic Id:</strong>
                            {{ $reserv->offic_id }}
                        </div>
                        <div class="form-group">
                            <strong>Collectiondate:</strong>
                            {{ $reserv->collectiondate }}
                        </div>
                        <div class="form-group">
                            <strong>Returndate:</strong>
                            {{ $reserv->returndate }}
                        </div>
                        <div class="form-group">
                            <strong>Flot Id:</strong>
                            {{ $reserv->flot_id }}
                        </div>
                        <div class="form-group">
                            <strong>Promotion Id:</strong>
                            {{ $reserv->promotion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Custom Id:</strong>
                            {{ $reserv->custom_id }}
                        </div>
                        <div class="form-group">
                            <strong>Insurcar Id:</strong>
                            {{ $reserv->insurcar_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
