<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function Data()
    {
        $url = 'https://panjs.com/ywc18.json';
        $data = file_get_contents($url);
        $data1 = json_decode($data);

        $categories = $data1->categories;
        $provinces = $data1->provinces;
        $priceRange = $data1->priceRange;
        $merchants = $data1->merchants;
        // dd($merchants);

        return view('welcome', compact('categories', 'provinces', 'priceRange', 'merchants'));
    }
}
