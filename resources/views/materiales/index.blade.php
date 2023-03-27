@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Materiales</h3>
    </div>
    <div class="section-body">
        <div class=row>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-material')
                        <a class="btn btn-warning" href={{route('materiales.create')}}>Nuevo</a>
                        @endcan
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="display: none;">ID</th>
                                <th style="color:#fff;">Titulo</th>
                                <th style="color:#fff;">Categoría</th>
                                <th style="color:#fff;">Formato</th>
                                <th style="color:#fff;">Contenido</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($materiales as $material)
                                <tr>
                                    <td style="display: none;">{{ $material->id }}</td>
                                    <td>{{ $material->titulo }}</td>
                                    <td>{{ $material->categoria->name }}</td>
                                    <td>{{ $material->tipo->name }}</td>
                                    <td>{{ substr($material->contenido, 0, 100) }}...</td>
                                    <td>
                                    @can('editar-material')
                                    <a class="btn btn-info" href="{{route('materiales.edit', $material->id)}}">Editar</a>
                                    @endcan
                                    @can('borrar-material')
                                    {!! Form::open(['method' => 'DELETE','route'=>['materiales.destroy',$material->id],
                                    'style'=>'display:inline']) !!}
                                    {!! Form::submit('Borrar',['class'=>'btn btn-danger'])!!}
                                    {!! Form::close() !!}
                                    @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Titulo</th>
                                    <th style="color:#fff;">Categoría</th>
                                    <th style="color:#fff;">Formato</th>
                                    <th style="color:#fff;">Contenido</th>
                                    <th style="color:#fff;">Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="pagination justify-content-end">
                            {!! $materiales->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection