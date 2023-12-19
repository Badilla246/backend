<?php

namespace App\Http\Controllers;
use App\Models\Merchandise;
use Illuminate\Http\Request;

class MerchandiseController extends Controller
{
    public function index() {
        $merchandises = Merchandise::orderBy('brand')->get();
        return response()->json($merchandises);
    }

    public function show(Merchandise $merchandise) {
        return response()->json([
            'status' => 'OK',
            'data' => $merchandise,
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'brand'           => 'required',
            'description'            => 'required',
            'retail_price'            => 'required',
            'whole_sale_price'       => 'required',
            'whole_sale_qty'         => 'required',
            'qty_stock'         => 'required',

        ]);

        Merchandise::create([
            'brand'            => $request->VenueName,
            'description'             => $request->brand,
            'retail_price'             => $request->description,
            'whole_sale_price'        => $request->whole_sale_price,
            'whole_sale_qty'          => $request->whole_sale_qty,
            'qty_stock'          => $request->qty_stock,
        ]);

    }
}
