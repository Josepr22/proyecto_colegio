@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Subir Material</h3>
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

                        {!! Form::open(array('route'=>'materiales.store','method'=>'POST')) !!}
                        <div class="row">
                            <div class="col-xs col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="titulo">Título</label>
                                    <input type="text" name="titulo" class="form-control">
                                </div>
                            </div>
                            <div class="col-xs col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Categoría</label>
                                    {!! Form::select('categoria_id',$categorias,null,array('class'=>'form-control')) !!}
                                </div>
                            </div>
                            <div class="col-xs col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="">Tipo</label>
                                    {!! Form::select('tipo_id',$tipos,null,array('class'=>'form-control')) !!}
                                </div>
                            </div>

                            <div class="col-xs col-sm-12 col-md-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="contenido" style="height: 100px"></textarea>
                                    <label for="contenido">Contenido</label>

                                </div>
                            </div>
                            <div class="col-xs col-sm-12 col-md-12">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection