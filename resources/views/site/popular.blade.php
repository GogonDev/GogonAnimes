@extends('site.layouts.basic')
@section('conteudo')

    <div class="container pt-4">

        <div class="row">
        <h5 class="text-white">Top 50 Populares - Gogon Animes <hr class="border border-light border-2 opacity-70"></h5>
        {{-- Verifica se achou algum resultado --}}
        @if(isset($animes) && $animes->count() > 0)
            @foreach ($animes as $resultado)

            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 pt-4">
        
                <!-- Item 1 -->
                    <div class="card border-dark bg-transparent">
                    <a href="{{Route('site.anime', $resultado['nome'])}}">
                    <div class="row">
                        <img src="{{ asset('animes/'.$resultado['nome'].$resultado['foto']) }}" class="img-fluid" alt="...">
                    </div>
                    </a>
                    <a class="text-white pt-2 link-offset-2 link-underline-dark" href="{{Route('site.anime', $resultado['cod_anime'])}}">{{$resultado['nome']}}</a>
                    </div>
                <!-- Item 1 -->

                </div>
         @endforeach
        {{-- Quando nao encontra nenhum resultado --}}
        @else
       <div class="d-flex align-items-center justify-content-center vh-100">
            <div class="text-center">
                <h1 class="display-1 fw-bold text-danger">Erro</h1>
                <p class="fs-3 text-white"> <span class="text-danger">Opps!</span> Nada foi encontrado nenhum anime</p>
                <a href="index.html" class="btn btn-info text-white">Voltar para o inicio</a>
            </div>
        </div>
        @endif
        </div>    

        </div>
    </div>

@endsection

