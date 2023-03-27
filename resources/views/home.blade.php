@extends('layouts.app')

@section('content')
<section class="section">
    <div class="section-header">
        <h3 class="page__heading">Blogs recientes</h3>
    </div>
    <div class="section-body">
        <div class="row justify-content-center">
            <div class="col-12">
                @foreach ($materiales as $material)
                <div class="card py-4 my-4">
                    <div class="card-body">
                        <h2 class="card-title">{{$material->titulo}}</h2>
                        <p class="card-text">{{substr($material->contenido, 0, 680) }}...</p>
                        <a class="nav-link" href="{{ route('show', $material->id) }}">Ver más</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection