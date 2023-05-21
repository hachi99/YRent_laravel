@extends('layouts.app')

@section('template_title')
    Offic
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Offic') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('offics.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Place Name</th>
										<th>Address</th>
										<th>Telephone</th>
										<th>Schedule</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offics as $offic)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $offic->place_name }}</td>
											<td>{{ $offic->address }}</td>
											<td>{{ $offic->telephone }}</td>
											<td>{{ $offic->schedule }}</td>

                                            <td>
                                                <form action="{{ route('offics.destroy',$offic->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('offics.show',$offic->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('offics.edit',$offic->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $offics->links() !!}
            </div>
        </div>
    </div>
@endsection
