@extends('layouts.main')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="checkout row">
        <div class="col-md-5">
            <div class="step">
                <div class="step-number align-middle">1</div>
                <div class="step-title mx-4">E-mail adres</div>
                <div class="my-4">
                    <fieldset class="textfield">
                        <input id="email" class="textfield__input" required name="email" type="email">
                        <label for="email" class="textfield__label textfield__label__required">E-mail</label>
                    </fieldset>
                </div>
            </div>
            <div class="step">
                <div class="step-number align-middle">2</div>
                <div class="step-title mx-4">Afleveradres</div>
                <div class="row my-4">
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="firstname" class="textfield__input" required name="firstname" type="text">
                            <label for="firstname" class="textfield__label textfield__label__required">Voornaam</label>
                        </fieldset>
                    </div>
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="surname" class="textfield__input" required name="surname" type="text">
                            <label for="surname" class="textfield__label textfield__label__required">Achternaam</label>
                        </fieldset>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md">
                        <select name="country" class="textfield__input">
                            <option value="Nederland">Nederland</option>
                            <option value="Belgie">België</option>
                        </select>
                    </div>
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="phone" class="textfield__input" required name="phone" type="text">
                            <label for="phone" class="textfield__label">Telefoonnummer</label>
                        </fieldset>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="postal" class="textfield__input" required name="postal" type="text">
                            <label for="postal" class="textfield__label textfield__label__required">Postcode</label>
                        </fieldset>
                    </div>
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="housenumber" class="textfield__input" required name="housenumber" type="text">
                            <label for="housenumber" class="textfield__label textfield__label__required">Huisnummer</label>
                        </fieldset>
                    </div>
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="adding" class="textfield__input" name="adding" type="text">
                            <label for="adding" class="textfield__label ">Toevoeging</label>
                        </fieldset>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="streetname" class="textfield__input" required name="streetname" type="text">
                            <label for="streetname" class="textfield__label textfield__label__required">Straatnaam</label>
                        </fieldset>
                    </div>
                    <div class="col-md">
                        <fieldset class="textfield">
                            <input id="place" class="textfield__input" required name="place" type="text">
                            <label for="place" class="textfield__label textfield__label__required">Plaatsnaam</label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class="step">
                <div class="step-number align-middle">3</div>
                <div class="step-title mx-4">Verzendmethode</div>
                <div class="my-4">
                    <fieldset class="textfield">
                        <input id="housenumber" class="textfield__input" required name="housenumber" type="text">
                        <label for="housenumber" class="textfield__label textfield__label__required">Huisnummer</label>
                    </fieldset>
                </div>
            </div>
            <div class="step">
                <div class="step-number align-middle">4</div>
                <div class="step-title mx-4">Betaalmethode</div>
                <div class="my-4">
                    <fieldset class="textfield">
                        <input id="housenumber" class="textfield__input" required name="housenumber" type="text">
                        <label for="housenumber" class="textfield__label textfield__label__required">Huisnummer</label>
                    </fieldset>
                </div>
            </div>
        </div>
        <div class="col-md"></div>
        <div class="col-md-5">
            <div class="container order py-2">
                <div>Controleer je bestelling</div>
                <div class="order-product">
                    <div class="row">
                        <div class="col">Subtotaal</div>
                        <div class="col text-end">€ 35,25</div>
                    </div>
                    <div class="row">
                        <div class="col">Verzendkosten (Pakket - PostNL)
                        </div>
                        <div class="col text-end">€ 6,95</div>
                    </div>
                    <div class="row fw-bold">
                        <div class="col">Totaal
                        </div>
                        <div class="col text-end">€ 6,95</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
