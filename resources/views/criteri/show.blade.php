@extends('layouts.app')

@section('template_title')
    {{ $criteri->name ?? "{{ __('Show') Criteri" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Criteri</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('criteris.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Criterion:</strong>
                            {{ $criteri->criterion }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $criteri->description }}
                        </div>
                        <div class="form-group">
                            <strong>Year:</strong>
                            {{ $criteri->year }}
                        </div>
                        <div class="form-group">
                            <strong>Modul Id:</strong>
                            {{ $criteri->modul_id }}
                        </div>
                        <div class="form-group">
                            <strong>Ra Id:</strong>
                            {{ $criteri->ra_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
