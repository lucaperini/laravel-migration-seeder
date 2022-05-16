@extends('layouts.main')

@section('title', 'Dettaglio Treno')

@section('main-content')

    <main>
        <div class="card text-center">
            <h5 class="card-header">{{ $train->stazione_di_partenza }}-{{ $train->stazione_di_arrivo }}</h5>
            <div class="card-body">
                <h5 class="card-title">Compagnia Ferroviaria</h5>
                <p class="card-text">{{ $train->azienda }}</p>
                <h5 class="card-title">Stazione di partenza</h5>
                <p class="card-text">{{ $train->stazione_di_partenza }}</p>
                <h5 class="card-title">Stazione di arrivo</h5>
                <p class="card-text">{{ $train->stazione_di_arrivo }}</p>
                <h5 class="card-title">Orario di partenza</h5>
                <p class="card-text">{{date('H:i', strtotime($train->orario_di_partenza))}}</p>
                <h5 class="card-title">Orario di arrivo</h5>
                <p class="card-text">{{date('H:i', strtotime($train->orario_di_arrivo))}}</p>
                <h5 class="card-title">Codice Treno</h5>
                <p class="card-text">{{ $train->codice_treno }}</p>
                <h5 class="card-title">Numero carrozze</h5>
                <p class="card-text">{{ $train->numero_carrozze }}</p>
                <a href="{{route('trains.index')}}" class="btn btn-primary">Torna alla Home</a>

            </div>
        </div>
    </main>
@endsection
