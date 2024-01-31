<?php

namespace App\Http\Controllers;


use App\Models\ProductHistory;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductHistorieController extends Controller
{
    public function index()
    {
        return view('layout.main')->with([
            '$product_histories' => ProductHistory::all()
        ]);
    }
}