@extends('layouts.app')

@section('template_title')
    Subscrip
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subscrip') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subscrips.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Name</th>
										<th>Email</th>
										<th>Telephone</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscrips as $subscrip)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subscrip->Name }}</td>
											<td>{{ $subscrip->email }}</td>
											<td>{{ $subscrip->telephone }}</td>

                                            <td>
                                                <form action="{{ route('subscrips.destroy',$subscrip->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subscrips.show',$subscrip->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subscrips.edit',$subscrip->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $subscrips->links() !!}
            </div>
        </div>
    </div>
@endsection
