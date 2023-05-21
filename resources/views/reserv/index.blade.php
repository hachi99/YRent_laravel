@extends('layouts.app')

@section('template_title')
    Reserv
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reserv') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reservs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Offic Id</th>
										<th>Collectiondate</th>
										<th>Returndate</th>
										<th>Flot Id</th>
										<th>Promotion Id</th>
										<th>Custom Id</th>
										<th>Insurcar Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reservs as $reserv)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reserv->offic_id }}</td>
											<td>{{ $reserv->collectiondate }}</td>
											<td>{{ $reserv->returndate }}</td>
											<td>{{ $reserv->flot_id }}</td>
											<td>{{ $reserv->promotion_id }}</td>
											<td>{{ $reserv->custom_id }}</td>
											<td>{{ $reserv->insurcar_id }}</td>

                                            <td>
                                                <form action="{{ route('reservs.destroy',$reserv->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reservs.show',$reserv->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reservs.edit',$reserv->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $reservs->links() !!}
            </div>
        </div>
    </div>
@endsection
