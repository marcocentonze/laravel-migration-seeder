@extends('layouts.app')

@section('title', 'Trains timetable')

@section('content')

<h1 class="text-center text-danger">TRENITALIA</h1>

<div class="container mt-5">
    <div class="d-flex justify-content-between">

        <!-- treni in partenza -->
        <div class="flex-fill mr-3 bg-light p-3 border">
            <h4>Treni in Partenza</h4>
            @foreach($treniInPartenza as $treno)
                <div class="pb-4">
                    <h6>Azienda:</h6> {{ $treno->azienda }}
                    <h6>Stazione di Partenza:</h6> {{ $treno->stazione_partenza }}
                    <h6>Orario di Partenza:</h6> {{ $treno->orario_partenza }}
                    <h6>Codice Treno:</h6> {{ $treno->codice_treno }}
                    <h6>Numero Carrozze:</h6> {{ $treno->numero_carrozze }}
                    <h6>In Orario:</h6> {{ $treno->in_orario ? 'Sì' : 'No' }}
                    <h6>Cancellato:</h6> {{ $treno->cancellato ? 'Sì' : 'No' }}
                </div>
            @endforeach
        </div>

        <!-- treni in arrivo -->
        <div class="flex-fill ml-3 bg-light p-3 border">
            <h4>Treni in Arrivo</h4>
            @foreach($treniInArrivo as $treno)
                <div class="pb-4">
                    <h6>Azienda:</h6> {{ $treno->azienda }}
                    <h6>Stazione di Arrivo:</h6> {{ $treno->stazione_arrivo }}
                    <h6>Orario di Arrivo:</h6> {{ $treno->orario_arrivo }}
                    <h6>Codice Treno:</h6> {{ $treno->codice_treno }}
                    <h6>Numero Carrozze:</h6> {{ $treno->numero_carrozze }}
                    <h6>In Orario:</h6> {{ $treno->in_orario ? 'Sì' : 'No' }}
                    <h6>Cancellato:</h6> {{ $treno->cancellato ? 'Sì' : 'No' }}
                </div>
            @endforeach
        </div>

    </div>
</div>




@endsection