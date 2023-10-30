@extends('layouts.app')

@section('title', 'Trains timetable')

@section('content')

    <h1 class="text-center text-black">TRENITALIA</h1>

    <div class="container mt-5">
        <div class="d-flex justify-content-between">

            <!-- treni in partenza -->
            <div class="flex-fill mr-3 bg-light p-3 border rounded shadow-sm bg-white mb-4">
                <h4><i class="fas fa-train px-2"></i>Treni in Partenza</h4>
                @foreach ($treniInPartenza as $treno)
                    <div class="pb-4 border-bottom">
                        <h6>Azienda:</h6> {{ $treno->azienda }}
                        <h6>Stazione di Partenza:</h6> {{ $treno->stazione_partenza }}
                        <h6>Orario di Partenza:</h6> {{ $treno->orario_partenza }}
                        <h6>Codice Treno:</h6> {{ $treno->codice_treno }}
                        <h6>Numero Carrozze:</h6> {{ $treno->numero_carrozze }}
                        <h6>In Orario:</h6>
                        {!! $treno->in_orario ? 'Si <i class="fa-solid fa-face-grin-stars" style="color: #d5f00a;"></i>' : 'No <i class="fa-solid fa-heart-crack" style="color: #eb0000;"></i>' !!}
                        <h6>Cancellato:</h6>
                        {!! $treno->cancellato ? 'No <i class="fa-solid fa-face-grin-stars" style="color: #d5f00a;"></i>' : 'Si <i class="fa-solid fa-heart-crack" style="color: #eb0000;"></i>' !!}
                       
                    </div>
                @endforeach
            </div>

            <!-- treni in arrivo -->
            <div class="flex-fill ml-3 bg-light p-3 border rounded shadow-sm bg-white mb-4">
                <h4><i class="fas fa-train px-2"></i>Treni in Arrivo</h4>
                @foreach ($treniInArrivo as $treno)
                    <div class="pb-4 border-bottom">
                        <h6>Azienda:</h6> {{ $treno->azienda }}
                        <h6>Stazione di Arrivo:</h6> {{ $treno->stazione_arrivo }}
                        <h6>Orario di Arrivo:</h6> {{ $treno->orario_arrivo }}
                        <h6>Codice Treno:</h6> {{ $treno->codice_treno }}
                        <h6>Numero Carrozze:</h6> {{ $treno->numero_carrozze }}
                        <h6>In Orario:</h6>
                        {!! $treno->in_orario ? 'Si <i class="fa-solid fa-face-grin-stars" style="color: #d5f00a;"></i>' : 'No <i class="fa-solid fa-heart-crack" style="color: #eb0000;"></i>' !!}
                        <h6>Cancellato:</h6>
                        {!! $treno->cancellato ? 'No <i class="fa-solid fa-face-grin-stars" style="color: #d5f00a;"></i>' : 'Si <i class="fa-solid fa-heart-crack" style="color: #eb0000;"></i>' !!}
                       
                @endforeach
            </div>

        </div>
    </div>




@endsection
