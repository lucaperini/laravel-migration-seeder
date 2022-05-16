@extends('layouts.main')

@section('title', 'Treni')

@section('main-content')
    <main>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="p-5 text-center">Treni in partenza</h1>
                    @foreach ($trains as $train)
                        <div class="card align-top p-3 m-2" style="width: 18rem; display:inline-block">
                            <div class="card-body mb-5">
                                <h5 class="card-title mb-3 w-80">{{ $train->azienda}}</h5>
                                <h6 class="card-subtitle mb-3">Stazione di partenza:<br>{{$train->stazione_di_partenza }}</h6>
                                <h6 class="card-subtitle mb-3 text-capitalize">Stazione di arrivo:<br>{{ $train->stazione_di_arrivo}}</h6>
                                <h6 class="card-subtitle mb-3 ">Orario di partenza: <br>{{date('H:i', strtotime($train->orario_di_partenza))}}</h6>
                                <h6 class="card-subtitle mb-3 ">Orario di arrivo: <br>{{date('H:i', strtotime($train->orario_di_arrivo))}}</h6>
                                <h6 class="card-subtitle mb-3 ">Codice Treno: <br>{{ $train->codice_treno }}</h6>
                                <h6 class="card-subtitle mb-3 ">Numero Carrozze: <br>{{ $train->numero_carrozze}}</h6>
                                <a href="/trains/{{$train->id}}" class="card-link">Dettaglio Treno</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-12">
                    {{$trains->links()}}
                </div>

            </div>
        </div>
    </main>
@endsection
