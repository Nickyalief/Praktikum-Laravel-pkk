<?php

namespace App\Http\Controllers;

use App\Models\Jual;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index() {

        $juals = Jual::all();

        return view('main', [
            'active' => 'main',
            'juals' => '$juals',
        ]);
    }

}
