@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Editar Categoría</h3>
    </div>
    <div class="section-body">
        <div class=row>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        @if ($errors->any())
                        <div class="alert alert-dark alert-dimissible fade show" role="alert">
                            <strong>¡Revisa los campos!</strong>
                            @foreach ($errors->all() as $error)
                            <span class="badge badge-danger">{{$error}}</span>
                            @endforeach
                            <button type="button" class="close" data-dimiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif

                        {!! Form::model($categoria, ['method'=>'PUT','route'=>['categorias.update', $categoria->id]]) !!}
                        <div class="row">
                            <div class="col-xs col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Nuevo nombre para la categoría</label>
                                    {!! Form::text('name',null,array('class'=>'form-control')) !!}
                                </div>
                            </div>                        
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </div> 
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection