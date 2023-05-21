<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('rfc') }}
            {{ Form::text('rfc', $fact->rfc, ['class' => 'form-control' . ($errors->has('rfc') ? ' is-invalid' : ''), 'placeholder' => 'Rfc']) }}
            {!! $errors->first('rfc', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reserv_id') }}
            {{ Form::text('reserv_id', $fact->reserv_id, ['class' => 'form-control' . ($errors->has('reserv_id') ? ' is-invalid' : ''), 'placeholder' => 'Reserv Id']) }}
            {!! $errors->first('reserv_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('custom_id') }}
            {{ Form::text('custom_id', $fact->custom_id, ['class' => 'form-control' . ($errors->has('custom_id') ? ' is-invalid' : ''), 'placeholder' => 'Custom Id']) }}
            {!! $errors->first('custom_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>