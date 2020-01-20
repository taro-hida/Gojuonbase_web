<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Userlib\Gojuonbase;

class PageController extends Controller
{
    public function show(\App\Http\Requests\PageRequest $request)
    {
        $name = $request->input('name');
        if($name){
            $obj = new Gojuonbase\Gojuonbase($name);
            $decimal = $obj->decimal();
            return view('show', [ 'val' => $decimal ]);
        }else{
            return view('form', [ 'val' => '' ]);
        }

    }
}
