<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {
        $stores = \App\Store::all();
        return $stores;
    }
}
