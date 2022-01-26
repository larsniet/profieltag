@extends('layouts.taglayout')

@section('title')
    My Tag
@endsection

@section('content')
    <form method="POST" action="/my-tag/verify">
        @csrf
        <div class="container">
            <div class="row vh-100">
                <div class="col-lg my-auto d-flex justify-content-center flex-column text-center">
                    <p class="taginfo">Vul hier de code van jouw kaart in</p>
                    <input class="taginput" name="code" type="text" placeholder="Jouw tag-code">
                    <button class="secondary-btn my-4" type="sub">Doorgaan</button>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                {{ $error }}
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-lg my-auto d-none d-lg-block">
                    <img class="profielkaart" src="{{ asset('images/kaart.png') }}" alt="Profielkaart voorbeeld">
                </div>
            </div>
        </div>
    </form>

@endsection
