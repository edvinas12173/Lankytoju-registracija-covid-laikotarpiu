<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\klientu_sarasas;
use Carbon\Carbon;

class MainController extends Controller
{
    public function index() {

        klientu_sarasas::where('created_at', '<', Carbon::now()->subDays(21))->delete();
        $klientu_sarasas = klientu_sarasas::orderBy('created_at', 'desc')->paginate(5);
        return view('home')->with('klientu_sarasas', $klientu_sarasas);
    }

    public function add() {
        return view('add');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'vardas' => 'required',
            'pavarde' => 'required',
            'numeris' => 'required'
        ]);

        $klientas = new klientu_sarasas;
        $klientas->vardas = $request->input('vardas');
        $klientas->pavarde = $request->input('pavarde');
        $klientas->numeris = $request->input('numeris');
        $klientas->save();

        return redirect('/')->with('msgadd', 'Klientas pridėtas į duomenų bazę.');
    }

    public function edit($id) {
        $klientas = klientu_sarasas::find($id);
        return view('edit')->with('klientas', $klientas);
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'vardas' => 'required',
            'pavarde' => 'required',
            'numeris' => 'required'
        ]);

        $klientas = klientu_sarasas::find($id);
        $klientas->vardas = $request->input('vardas');
        $klientas->pavarde = $request->input('pavarde');
        $klientas->numeris = $request->input('numeris');
        $klientas->save();

        return redirect('/')->with('msgupdate', 'Kliento informacija atnaujinta.');
    }

    public function destroy($id){
        $klientas = klientu_sarasas::find($id);
        $klientas->delete();
        return redirect('/')->with('msgdelete', 'Klientas ištrintas iš duomenų bazės.');
    }
}
