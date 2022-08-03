@extends('layouts.app')

@section('template_title')
    Lugar
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lugar') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lugars.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombre</th>
										<th>Direccion</th>
										<th>Horarios</th>
										<th>Descripcion</th>
										<th>Foto Url</th>
										<th>Tipolugar Id</th>
										<th>Rutas Id</th>
										<th>Gastronomia Id</th>
										<th>Evento Id</th>
										<th>Calificasiones Id</th>
										<th>Servicios Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lugars as $lugar)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lugar->nombre }}</td>
											<td>{{ $lugar->direccion }}</td>
											<td>{{ $lugar->horarios }}</td>
											<td>{{ $lugar->descripcion }}</td>
											<td>
                                            {{ $lugar->foto_url }}
                                            </td>
											<td>{{ $lugar->tipolugar_id }}</td>
											<td>{{ $lugar->rutas_id }}</td>
											<td>{{ $lugar->gastronomia_id }}</td>
											<td>{{ $lugar->evento_id }}</td>
											<td>{{ $lugar->calificasiones_id }}</td>
											<td>{{ $lugar->servicios_id }}</td>

                                            <td>
                                                <form action="{{ route('lugars.destroy',$lugar->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lugars.show',$lugar->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lugars.edit',$lugar->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $lugars->links() !!}
            </div>
        </div>
    </div>
@endsection
