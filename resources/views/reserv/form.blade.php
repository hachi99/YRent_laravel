<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('offic_id') }}
            {{ Form::text('offic_id', $reserv->offic_id, ['class' => 'form-control' . ($errors->has('offic_id') ? ' is-invalid' : ''), 'placeholder' => 'Offic Id']) }}
            {!! $errors->first('offic_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('collectiondate') }}
            {{ Form::text('collectiondate', $reserv->collectiondate, ['class' => 'form-control' . ($errors->has('collectiondate') ? ' is-invalid' : ''), 'placeholder' => 'Collectiondate']) }}
            {!! $errors->first('collectiondate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('returndate') }}
            {{ Form::text('returndate', $reserv->returndate, ['class' => 'form-control' . ($errors->has('returndate') ? ' is-invalid' : ''), 'placeholder' => 'Returndate']) }}
            {!! $errors->first('returndate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('flot_id') }}
            {{ Form::text('flot_id', $reserv->flot_id, ['class' => 'form-control' . ($errors->has('flot_id') ? ' is-invalid' : ''), 'placeholder' => 'Flot Id']) }}
            {!! $errors->first('flot_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('promotion_id') }}
            {{ Form::text('promotion_id', $reserv->promotion_id, ['class' => 'form-control' . ($errors->has('promotion_id') ? ' is-invalid' : ''), 'placeholder' => 'Promotion Id']) }}
            {!! $errors->first('promotion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('custom_id') }}
            {{ Form::text('custom_id', $reserv->custom_id, ['class' => 'form-control' . ($errors->has('custom_id') ? ' is-invalid' : ''), 'placeholder' => 'Custom Id']) }}
            {!! $errors->first('custom_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('insurcar_id') }}
            {{ Form::text('insurcar_id', $reserv->insurcar_id, ['class' => 'form-control' . ($errors->has('insurcar_id') ? ' is-invalid' : ''), 'placeholder' => 'Insurcar Id']) }}
            {!! $errors->first('insurcar_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>