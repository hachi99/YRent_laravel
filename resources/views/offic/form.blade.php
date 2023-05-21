<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('place_name') }}
            {{ Form::text('place_name', $offic->place_name, ['class' => 'form-control' . ($errors->has('place_name') ? ' is-invalid' : ''), 'placeholder' => 'Place Name']) }}
            {!! $errors->first('place_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('address') }}
            {{ Form::text('address', $offic->address, ['class' => 'form-control' . ($errors->has('address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telephone') }}
            {{ Form::text('telephone', $offic->telephone, ['class' => 'form-control' . ($errors->has('telephone') ? ' is-invalid' : ''), 'placeholder' => 'Telephone']) }}
            {!! $errors->first('telephone', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('schedule') }}
            {{ Form::text('schedule', $offic->schedule, ['class' => 'form-control' . ($errors->has('schedule') ? ' is-invalid' : ''), 'placeholder' => 'Schedule']) }}
            {!! $errors->first('schedule', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>