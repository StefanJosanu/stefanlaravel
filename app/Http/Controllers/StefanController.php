<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StefanController extends Controller
{
    public function home() {
        $title = 'Home';
        return view('pages.welcome', compact('title'));
    }
    public function contacts() {
        $title = 'Contacts';
        $np = "Ștefan Josanu";
        return view('pages.contacts', compact('np', 'title'));
    }
    public function about() {
        $title = 'About';
        $groups = ['W-2042', 'W-2041', 'P-2042', 'P-2041'];
        return view('pages.about', compact('groups', 'title'));
    }
}
