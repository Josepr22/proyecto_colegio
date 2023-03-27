@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Tipos de formato existentes</h3>
    </div>
    <div class="section-body">
        <div class=row>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-tipo')
                        <a class="btn btn-warning" href={{route('tipos.create')}}>Nuevo</a>
                        @endcan
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="color:#fff;">ID</th>
                                <th style="color:#fff;">Tipo</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($tipos as $tipo)
                                <tr>
                                    <td>{{$tipo->id}}</td>
                                    <td>{{$tipo->name}}</td>
                                    <td>
                                        @can('editar-tipo')
                                        <a class="btn btn-info" href="{{route('tipos.edit', $tipo->id)}}">Editar</a>
                                        @endcan
                                        @can('borrar-tipo')
                                        {!! Form::open(['method' => 'DELETE','route'=>['tipos.destroy',$tipo->id], 'style'=>'display:inline']) !!}
                                        {!! Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
                                        {!! Form::close() !!}   
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Tipo</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="pagination justify-content-end">
                            {!! $tipos->links() !!}
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>               
    </section>   
@endsection