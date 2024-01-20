<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('criterion') }}
            {{ Form::text('criterion', $criteri->criterion, ['class' => 'form-control' . ($errors->has('criterion') ? ' is-invalid' : ''), 'placeholder' => 'Criterion']) }}
            {!! $errors->first('criterion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $criteri->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('year') }}
            {{ Form::text('year', $criteri->year, ['class' => 'form-control' . ($errors->has('year') ? ' is-invalid' : ''), 'placeholder' => 'Year']) }}
            {!! $errors->first('year', '<div class="invalid-feedback">:message</div>') !!}
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
            <label for="ra_id">RA</label>
            <select class="form-control" name="ra_id" id="ra_id">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $ra->ra_id ? 'selected' : '' }}>{{ substr($ra->uf->name, 0, 4) }} - {{ $ra->name }}</option>
                @endforeach
            </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
<script>
    // === DOM ELEMENTS === //
    const selectModulId = document.getElementById("modul_id");
    const selectRaId = document.getElementById("ra_id");
    const vModuls = JSON.parse(`{!! json_encode(\App\Models\Modul::all()) !!}`);
    const vUfs = JSON.parse(`{!! json_encode(\App\Models\Uf::all()) !!}`);
    const vRas = JSON.parse(`{!! json_encode(\App\Models\Ra::all()) !!}`);

    // === EVENTS === //
    selectModulId.addEventListener("change", changeRaOptions, false);

    // === METHODS === //

    /** 
     * Change RAs values with MODUL_ID data related
     * */
    function changeRaOptions() {
        let f, c;
        selectRaId.innerHTML = '';
        for (f = 0; f < vUfs.length; f++) {
            if (vUfs[f]['modul_id'] == selectModulId.value) {
                for (c = 0; c < vRas.length; c++) {
                    if (vRas[c]['uf_id'] == vUfs[f]['id']) {
                        selectRaId.innerHTML += `<option value="` + vRas[c]['id'] + `"}>` + vUfs[f]['name'].substr(0, 3) + ` - ` + vRas[c]['name'] + `</option>`;
                    }
                }
            }
        }
    }

    function getPositionElementID(array, id) {
        let pos = -1; 
        for (f = 0; f < array.length && pos == -1; f++) {
            if (array[f].id == id) {
                pos = f;
            }
        }
        return pos;
    }
    changeRaOptions();
</script>