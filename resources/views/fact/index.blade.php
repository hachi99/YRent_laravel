@extends('layouts.app')

@section('template_title')
    Fact
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fact') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facts.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Rfc</th>
										<th>Reserv Id</th>
										<th>Custom Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facts as $fact)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $fact->rfc }}</td>
											<td>{{ $fact->reserv_id }}</td>
											<td>{{ $fact->custom_id }}</td>

                                            <td>
                                                <form action="{{ route('facts.destroy',$fact->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facts.show',$fact->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facts.edit',$fact->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $facts->links() !!}
            </div>
        </div>
    </div>
@endsection
