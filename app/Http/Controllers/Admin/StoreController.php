<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::paginate(10);

        return view('admin.stores.index', compact('stores'));
    }
}
