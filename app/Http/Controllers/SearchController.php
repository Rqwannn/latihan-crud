<?php

namespace App\Http\Controllers;

use App\Models\Latihan;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $data = Latihan::where('nama', 'LIKE', '%' . $request->key . '%')->orWhere('alamat', 'LIKE', '%' . $request->key . '%')->get();
        return view('welcome', compact('data'));
    }
}
