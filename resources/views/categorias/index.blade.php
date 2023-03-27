@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Categorías</h3>
    </div>
    <div class="section-body">
        <div class=row>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @can('crear-categoria')
                        <a class="btn btn-warning" href={{route('categorias.create')}}>Nuevo</a>
                        @endcan
                        <table class="table table-striped mt-2">
                            <thead style="background-color: #6777ef;">
                                <th style="color:#fff;">ID</th>
                                <th style="color:#fff;">Categoría</th>
                                <th style="color:#fff;">Acciones</th>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $cat)
                                <tr>
                                    <td>{{$cat->id}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>
                                        @can('editar-categoria')
                                        <a class="btn btn-info" href="{{route('categorias.edit', $cat->id)}}">Editar</a>
                                        @endcan
                                        @can('borrar-categoria')
                                        {!! Form::open(['method' => 'DELETE','route'=>['categorias.destroy',$cat->id], 'style'=>'display:inline']) !!}
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
                                    <th>Categoría</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="pagination justify-content-end">
                            {!! $categorias->links() !!}
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>               
    </section>   
@endsection