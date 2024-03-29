@extends('layouts.app')

@section('template_title')
    Criteri
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Criteri') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('criteris.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Criterion</th>
										<th>Description</th>
										<th>Year</th>
										<th>Modul</th>
										<th>Ra</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($criteris as $criteri)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $criteri->criterion }}</td>
											<td>{{ $criteri->description }}</td>
											<td>{{ $criteri->year }}</td>
											<td>{{ $criteri->modul->name }}</td>
											<td>{{ substr($criteri->ra->uf->name, 0, 4) }} - {{ $criteri->ra->name }}</td>

                                            <td>
                                                <form action="{{ route('criteris.destroy',$criteri->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('criteris.show',$criteri->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('criteris.edit',$criteri->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $criteris->links() !!}
            </div>
        </div>
    </div>
@endsection
