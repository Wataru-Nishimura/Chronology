<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chronology;

class ChronologyController extends Controller
{
    public function index(Chronology $chronology)
    {
        return $chronology->get();
    }
}
