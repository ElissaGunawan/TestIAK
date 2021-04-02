<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    public function index()
    {
        $promos = Promo::all();
        $data = [
            'promos' => $promos
        ];
        return view('index', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Promo::create($request->all());

        return redirect('/');
    }

    public function edit(Promo $promo)
    {
        return view('edit', compact('promo'));
    }

    public function update(Request $request, Promo $promo)
    {
        $promo->update($request->all());

        return redirect('/');
    }

    public function delete(Promo $promo)
    {
        $promo->delete();

        return redirect('/');
    }
}
