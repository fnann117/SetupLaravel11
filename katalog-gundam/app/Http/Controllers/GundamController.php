<?php

namespace App\Http\Controllers;

use App\Models\Gundam;
use Illuminate\Http\Request;

class GundamController extends Controller
{
    public function index()
    {
        $gundams = Gundam::all();
        return view('gundam.index', compact('gundams'));
    }
}