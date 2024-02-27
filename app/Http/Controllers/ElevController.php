<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Elev;

class ElevController extends Controller
{
    public function showElevi()
    {
        $elevi = Elev::all();
        return view('pages.elevi', compact('elevi'));
    }
}
