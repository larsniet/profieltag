@extends('layouts.main')

@section('title')
    Home
@endsection

@section('content')
    <div class="home row">
        <div class="col-lg my-auto">
            <h1 class="home__title">
                Jouw <span class="home__title--yellow">virtuele profiel.</span> Gewoon in je broekzak!
            </h1>
            <div class="row mt-5">
                <div class="col-sm">
                    <p class="home__sub">Een pasje naast een telefoon houden en meteen doorverwezen worden naar een door
                        jou ingestelde link,
                        dat is de toekomst.</p>
                </div>
                <div class="col-sm">
                    <p class="home__sub">Of je nu bij een feest bent of een business meeting hebt, door profieltag kan
                        je altijd en overal
                        jouw online profiel delen.</p>
                </div>
            </div>
        </div>
        <div class="col-lg my-auto">
            <img class="profielkaart" src="{{ asset('images/kaart.png') }}" alt="Profielkaart voorbeeld">
        </div>
    </div>
@endsection
