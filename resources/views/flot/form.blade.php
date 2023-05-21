<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('details') }}
            {{ Form::text('details', $flot->details, ['class' => 'form-control' . ($errors->has('details') ? ' is-invalid' : ''), 'placeholder' => 'Details']) }}
            {!! $errors->first('details', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('passenger') }}
            {{ Form::text('passenger', $flot->passenger, ['class' => 'form-control' . ($errors->has('passenger') ? ' is-invalid' : ''), 'placeholder' => 'Passenger']) }}
            {!! $errors->first('passenger', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('doors') }}
            {{ Form::text('doors', $flot->doors, ['class' => 'form-control' . ($errors->has('doors') ? ' is-invalid' : ''), 'placeholder' => 'Doors']) }}
            {!! $errors->first('doors', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cost') }}
            {{ Form::text('cost', $flot->cost, ['class' => 'form-control' . ($errors->has('cost') ? ' is-invalid' : ''), 'placeholder' => 'Cost']) }}
            {!! $errors->first('cost', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>