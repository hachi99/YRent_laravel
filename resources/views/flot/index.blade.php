@extends('layouts.app')

@section('template_title')
    Flot
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Flot') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('flots.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Details</th>
										<th>Passenger</th>
										<th>Doors</th>
										<th>Cost</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($flots as $flot)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $flot->details }}</td>
											<td>{{ $flot->passenger }}</td>
											<td>{{ $flot->doors }}</td>
											<td>{{ $flot->cost }}</td>

                                            <td>
                                                <form action="{{ route('flots.destroy',$flot->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('flots.show',$flot->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('flots.edit',$flot->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $flots->links() !!}
            </div>
        </div>
    </div>
@endsection
