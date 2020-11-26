@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row vert">
            <div class="boxas">
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}">
                    <div class="info">Privaloma klientų registraciją dėl covid-19</div>
                </div>
                <form action="{{ route('edit', $klientas->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="pav">Vardas</label>
                        <input type="text" name="vardas" class="form-control" value="{{ $klientas->vardas }}">
                    </div>
                    <div class="form-group">
                        <label class="pav">Pavardė</label>
                        <input type="text" name="pavarde" class="form-control" value="{{ $klientas->pavarde }}">
                    </div>
                    <div class="form-group">
                        <label class="pav">Telefono numeris</label>
                        <input type="text" name="numeris" class="form-control" value="{{ $klientas->numeris }}">
                    </div>
                    <div class="reg">
                        <button type="submit" class="btn btn-success">Atnaujinti</button>
                    </div>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
@endsection
