<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $activitat->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $activitat->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('hours') }}
            {{ Form::text('hours', $activitat->hours, ['class' => 'form-control' . ($errors->has('hours') ? ' is-invalid' : ''), 'placeholder' => 'Hours']) }}
            {!! $errors->first('hours', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('programacion_id') }}
            {{ Form::text('programacion_id', $activitat->programacion_id, ['class' => 'form-control' . ($errors->has('programacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Programacion Id']) }}
            {!! $errors->first('programacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uf_id') }}
            {{ Form::text('uf_id', $activitat->uf_id, ['class' => 'form-control' . ($errors->has('uf_id') ? ' is-invalid' : ''), 'placeholder' => 'Uf Id']) }}
            {!! $errors->first('uf_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('criteri_ids') }}
            {{ Form::text('criteri_ids', $activitat->criteri_ids, ['class' => 'form-control' . ($errors->has('criteri_ids') ? ' is-invalid' : ''), 'placeholder' => 'Criteri Ids']) }}
            {!! $errors->first('criteri_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('continguts_ids') }}
            {{ Form::text('continguts_ids', $activitat->continguts_ids, ['class' => 'form-control' . ($errors->has('continguts_ids') ? ' is-invalid' : ''), 'placeholder' => 'Continguts Ids']) }}
            {!! $errors->first('continguts_ids', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>