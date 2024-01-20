<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('year') }}
            {{ Form::text('year', $programacion->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Year']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $programacion->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            <label for="modul_id">Modul</label>
            <select class="form-control" name="modul_id" id="modul_id">
                @foreach (\App\Models\Modul::all() as $modul)
                <option value="{{ $modul->id }}" {{ $modul->id == $modul->modul_id ? 'selected' : '' }}>{{ $modul->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">User</label>
            <select class="form-control" name="user_id" id="user_id">
                <option value="{{ Auth::user()->id }}" selected>{{ Auth::user()->name }}</option>
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>