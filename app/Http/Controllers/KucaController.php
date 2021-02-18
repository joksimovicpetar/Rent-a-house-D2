<?php

namespace App\Http\Controllers;

use App\Kuca;
use Illuminate\Http\Request;

class KucaController extends Controller
{
    public function loadKuce()
    {
        $kuce = Kuca::all();

        return response()->json([
            'kuce' => $kuce
        ]);
    }


    public function deleteKuca(Request $request)
    {
        $id = $request->input('id');
        Kuca::find($id)->delete();
    }

    public function insertKuca(Request $request)
    {
        $adresa = $request->input('adresa');
        $grad = $request->input('grad');
        $drzava = $request->input('drzava');
        $kirija = $request->input('kirija');

        $id = Kuca::insertGetId([
            'adresa' => $adresa,
            'grad' => $grad,
            'drzava' => $drzava,
            'kirija' => $kirija,
        ]);

        return response()->json([
            'id' => $id
        ]);
    }
}
