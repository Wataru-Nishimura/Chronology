<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citation;

class CitationController extends Controller
{
    public function citation(Citation $citation)
    {
        return view('citations/citation')->with(['citations' => $citation->getPaginateByLimit()]);
    }
}