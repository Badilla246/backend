<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index() {
        $suppliers = Supplier::orderBy('company_name')->get();
        return response()->json($suppliers);
    }
}
