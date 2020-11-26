@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row vert">
            <div class="boxas">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}">
                    <div class="info">Privaloma klientų registraciją dėl covid-19</div>
                </div>
                <form action="{{ route('add') }}"  method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="pav">Vardas</label>
                        <input type="text" name="vardas" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="pav">Pavardė</label>
                        <input type="text" name="pavarde" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="pav">Telefono numeris</label>
                        <input type="text" name="numeris" class="form-control" required>
                    </div>
                    <div class="reg">
                        <button type="submit" class="btn btn-dark">Pridėti</button>
                    </div>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
@endsection
