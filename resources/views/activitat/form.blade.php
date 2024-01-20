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
            <label for="programacion_id">Programació</label>
            <select class="form-control" name="programacion_id" id="programacion_id">
                @foreach (\App\Models\Programacion::all() as $programacion)
                    <option value="{{ $programacion->id }}" {{ $programacion->id == $programacion->programacion_id ? 'selected' : '' }}>{{ $programacion->year }} - {{ $programacion->modul->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="uf_id">UF</label>
            <select class="form-control" name="uf_id" id="uf_id">
                @foreach (\App\Models\Uf::all() as $uf)
                    <option value="{{ $uf->id }}" {{ $uf->id == $uf->uf_id ? 'selected' : '' }}>{{ $uf->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="ra_ids">RAs</label>
            <select class="js-example-basic-multiple" name="ra_ids" id="ra_ids" multiple="multiple">
                @foreach (\App\Models\Ra::all() as $ra)
                    <option value="{{ $ra->id }}" {{ $ra->id == $ra->ra_id ? 'selected' : '' }}>{{ $ra->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="criteri_ids">Criteris</label>
            <select class="js-example-basic-multiple" name="criteri_ids" id="criteri_ids" multiple="multiple">
                @foreach (\App\Models\Criteri::all() as $criteri)
                    <option value="{{ $criteri->id }}" {{ $criteri->id == $criteri->criteri_id ? 'selected' : '' }}>{{ $criteri->criterion }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="contingut_ids">Continguts</label>
            <select class="js-example-basic-multiple" name="contingut_ids" id="contingut_ids" multiple="multiple">
                @foreach (\App\Models\Contingut::all() as $contingut)
                    <option value="{{ $contingut->id }}" {{ $contingut->id == $contingut->contingut_id ? 'selected' : '' }}>{{ $contingut->content }}</option>
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
    const selectProgramacionId = document.getElementById("programacion_id");
    const selectUfId = document.getElementById("uf_id");
    const selectRasIds = document.getElementById("ra_ids");
    const selectContinguts = document.getElementById("contingut_ids");
    const selectCriteris = document.getElementById("criteri_ids");
    const vModuls = JSON.parse(`{!! json_encode(\App\Models\Modul::all()) !!}`);
    const vUfs = JSON.parse(`{!! json_encode(\App\Models\Uf::all()) !!}`);
    const vRas = JSON.parse(`{!! json_encode(\App\Models\Ra::all()) !!}`);
    const vProgramacions = JSON.parse(`{!! json_encode(\App\Models\Programacion::all()) !!}`);
    const vCriteris = JSON.parse(`{!! json_encode(\App\Models\Criteri::all()) !!}`);
    const vContinguts = JSON.parse(`{!! json_encode(\App\Models\Contingut::all()) !!}`);

    // === EVENTS === //
    selectProgramacionId.addEventListener("change", changeUfOptions, false);
    selectUfId.addEventListener("change", changeRaOptions, false);

    // === METHODS === //

    /** 
     * @return Position of the ID in array
     * */
    function getPositionElementID(array, id) {
        let pos = -1; 
        for (f = 0; f < array.length && pos == -1; f++) {
            if (array[f].id == id) {
                pos = f;
            }
        }
        return pos;
    }

    /** 
     * Change UFs options using MODULE_ID data related
     * */
    function changeUfOptions() {
        let f, c;
        selectUfId.innerHTML = "";
        for (f = 0; f < vUfs.length; f++) {
            if (vUfs[f]['modul_id'] == vProgramacions[(getPositionElementID(vProgramacions, selectProgramacionId.value))]["modul_id"]) {
                console.log(f);
                selectUfId.innerHTML += `<option value="` + vUfs[f]["id"] + `">` + vUfs[f]["name"] + `</option>`;
            }
        }
        changeRaOptions();
    }

    /** 
     * Change RAs options using UF_ID data related
     * */
    function changeRaOptions() {
        let f, c;
        selectRasIds.innerHTML = "";
        for (f = 0; f < vRas.length; f++) {
            if (vRas[f]["uf_id"] == selectUfId.value) {
                selectRasIds.innerHTML += `<option value="` + vRas[f]["id"] + `">` + vRas[f]["name"] + `</option>`;
            }
        }
        changeContingutOptions();
        changeCriteriOptions();
    }

    /** 
     * Change CONTINGUTs options using RA_ID data related
     * */
    function changeContingutOptions() {
        console.log("cambio");

        let f, c;
        selectContinguts.innerHTML = "";
        for (f = 0; f < vContinguts.length; f++) {
            if (selectRasIds.value.includes(vContinguts[f]["ra_id"])) {
                selectContinguts.innerHTML += `<option value="` + vContinguts[f]["id"] + `">` + vContinguts[f]["content"] + `</option>`;
            }
        }
    }

    /** 
     * Change CRITERIs options using RA_ID data related
     * */
    function changeCriteriOptions() {
        let f, c;
        selectCriteris.innerHTML = "";
        for (f = 0; f < vCriteris.length; f++) {
            if (selectRasIds.value.includes(vCriteris[f]["ra_id"])) {
                selectCriteris.innerHTML += `<option value="` + vCriteris[f]["id"] + `">` + vCriteris[f]["criterion"] + `</option>`;
            }
        }
    }

    changeUfOptions();

    $('#ra_ids').on('select2:select', function (e) {
        changeContingutOptions();
        changeCriteriOptions();
    });
</script>