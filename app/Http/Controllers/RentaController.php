<?php

namespace App\Http\Controllers;

use App\Renta;
use Illuminate\Http\Request;

class RentaController extends Controller
{
    public function insertRenta(Request $request)
    {
        $date_od = $request->input('date_od');
        $date_do = $request->input('date_do');
        $kuca_id = $request->input('kuca_id');

        Renta::insert([
            'date_od' => $date_od,
            'date_do' => $date_do,
            'kuca_id' => $kuca_id,
        ]);
        return view('kuce');
    }
    public function loadRente()
    {
        $rente = Renta::with('kuca')->get();

        return view('rente', [
            'rente' => $rente,
        ]);
    }
}
