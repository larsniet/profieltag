@extends('layouts.taglayout')

@section('title')
    My Tag
@endsection

@section('content')
    <div class="container">
        <div class="row vh-100">
            <div class="col-lg my-auto d-flex justify-content-center flex-column text-center">
                <p class="taginfo">Vul hier de code van jouw kaart in</p>
                <input class="taginput" type="text" placeholder="Jouw tag-code">
                <button class="secondary-btn my-4" type="button">Doorgaan</button>
            </div>
            <div class="col-lg my-auto d-none d-lg-block">
                <img class="profielkaart" src="{{ asset('images/kaart.png') }}" alt="Profielkaart voorbeeld">
            </div>
        </div>
    </div>
@endsection
