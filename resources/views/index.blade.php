@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row vert">
            <div class="boxas">
                <div class="logo">
                    <img src="images/logo.png">
                    <div class="info">Privaloma klientų registraciją dėl covid-19</div>
                </div>
                <form>
                    <div class="form-group">
                        <label class="pav">Vardas</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="pav">Pavardė</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label class="pav">Telefono numeris</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="reg">
                        <button type="submit" class="btn btn-dark">Registruoti</button>
                    </div>
                </form>
            </div>
            <div class="footeris">
                <p>Sistema &copy; Edvinas Valentinovičius</p>
                <a href="/list"><p>Administracijos puslapis</p></a>
            </div>
        </div>
    </div>
@endsection
