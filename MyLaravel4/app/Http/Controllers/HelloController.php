<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function main() {

        $ospiti = Ospiti::all();

        return view('pages.main', compact('ospiti'));
    }

    public function main($id) {

        $ospite = Ospiti::findOrFail($id);

        // dd($ospite);

        return view('pages.ospite', compact('ospite'));
    }
}
