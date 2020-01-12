<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Userlib\Gojuonbase;

class PageController extends Controller
{
    public function show(Request $request)
    {
        $name = $request->input('name');
        $obj = new Gojuonbase\Gojuonbase($name);
        $decimal = $obj->decimal();

        return view('show', [ 'val' => $decimal ]);
    }
}
