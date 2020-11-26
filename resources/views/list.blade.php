@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row vert">
            <div class="boxas">
                <div class="logo">
                    <img src="images/logo.png">
                    <div class="info">Privaloma klientų registraciją dėl covid-19</div>
                </div>
                <div class="alert alert-warning" role="alert">
                    Duomenys automatiškai išsitrina po <b>21 dienos</b> po apsilankymo!
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Vardas</th>
                        <th>Pavardė</th>
                        <th>Telefono numeris</th>
                        <th>Apsilankymo data</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Edvinas</td>
                        <td>Valentinovičius</td>
                        <td>860888222</td>
                        <td>2020/10/31</td>
                        <td>
                            <a href="/edit" class="text-success">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="footeris">
                <p>Sistema &copy; Edvinas Valentinovičius</p>
                <a href="/list"><p>Klientų sąrašas</p></a>
                <a href="/"><p>Registruoti klientą</p></a>
                <a href=""><p>Atsijungti</p></a>
            </div>
        </div>
    </div>
@endsection
