<?php

namespace App\Http\Controllers\CupCakes;

use App\Http\Controllers\Controller;
use App\Models\ProductsModel;
use Illuminate\Http\Request;

class CupCakesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cupcakes.cadastro', ['nav' => "cad"]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'product' => 'required',
            'price' => 'required|numeric'
        ];

        $request->validate($rules);

        $product = $request->get('product');
        $price = $request->get('price');

        ProductsModel::create([
            'product' => $product,
            'price' => $price
        ]);

        return back()->with('success', 'Product created');

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataCad = ProductsModel::find($id);

        if (is_null($dataCad)) {
            return back()->withErrors('Cupcake not found');
        }

        return view('cupcakes.edit', [
            'data' => $dataCad, 'nav' => 'edit',
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataCad = ProductsModel::find($id);

        if (is_null($dataCad)) {
            return back()->withErrors('Cupcake not found');
        }

        $rules = [
            'product' => 'required',
            'price' => 'required|numeric',
        ];

        $request->validate($rules);

        $dataCad->product = $request->get('product');
        $dataCad->price = $request->get('price');
        $dataCad->save();

        return back()->with('Succes');
    }
}
