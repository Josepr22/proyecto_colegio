@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <h1 class="text-center py-4">{{$material->titulo}}</h1>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card py-4 my-4">
                    <div class="card-body">
                        <p class="card-text">{{$material->contenido}}</p>
                        <a class="btn btn-primary backBtn btn-lg pull-left" onclick = "history.back ()">
                            Volver
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection