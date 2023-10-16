@extends('layouts.app')

@section('page-title', 'Lista Treni')

@section('main-content')
    <section>
        <div class="py-2">
            <div class="container">
                <div class="row row-cols-2 g-3">
                    @forelse($trains as $train)
                        <div class="col">
                            <div class="card text-center border-0">
                                <div class="card-body">
                                    <h5 class="card-title">Azienda: {{ $train->azienda }} </h5>
                                    <p class="card-text">Stazione Partenza: {{ $train->stazione_partenza }} </p>
                                    <p class="card-text">Stazione Arrivo: {{ $train->stazione_arrivo }} </p>
                                    <p class="card-text">Orario Partenza: {{ $train->orario_partenza }} </p>
                                    <p class="card-text">Orario Arrivo: {{ $train->orario_arrivo }} </p>
                                    <p class="card-text">Codice Treno: {{ $train->codice_treno }} </p>
                                    <p class="card-text">Numero Carozze: {{ $train->numero_carozze }} </p>
                                    <p class="card-text">In Orario: {{ $train->in_orario }} </p>
                                    <p class="card-text">Cancellato: {{ $train->cancellato }} </p>
                                </div>
                            </div>
                        </div>

                    @empty
                        <div class="col">
                            <p>Nessun treno disponibile al momento. </p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
@endsection
