<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('type') }}
            {{ Form::text('type', $promotion->type, ['class' => 'form-control' . ($errors->has('type') ? ' is-invalid' : ''), 'placeholder' => 'Type']) }}
            {!! $errors->first('type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('detail') }}
            {{ Form::text('detail', $promotion->detail, ['class' => 'form-control' . ($errors->has('detail') ? ' is-invalid' : ''), 'placeholder' => 'Detail']) }}
            {!! $errors->first('detail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('validity') }}
            {{ Form::text('validity', $promotion->validity, ['class' => 'form-control' . ($errors->has('validity') ? ' is-invalid' : ''), 'placeholder' => 'Validity']) }}
            {!! $errors->first('validity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>