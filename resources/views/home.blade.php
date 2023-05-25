@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="text-center">Treni</h1>
        <div class="row row-cols-3 g-4">
            @foreach ($trains as $train)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $train->azienda }}</h5>
                        <h6 class="card-subtitle ">{{ $train->codice_treno }}</h6>
                        <p class="card-text">Stazione di Partenza: {{ $train->stazione_di_partenza }}</p>
                        <p class="card-text">Orario di Partenza: {{ $train->orario_di_partenza }}</p>
                        <p class="card-text">Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</p>
                        <p class="card-text">Orario di Arrivo: {{ $train->orario_di_arrivo }}</p>
                        <p class="card-text">{{$train->data_di_partenza }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection