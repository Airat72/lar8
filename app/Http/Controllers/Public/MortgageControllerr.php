<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Mortgage; 
use Illuminate\Http\Request;

class MortgageControllerr extends Controller
{
    public function index()
    {
        $mortgages = Mortgage::where('is_active', true)->get(); 
        return view('public.mortgages.index', compact('mortgages')); 
    }

    public function show(Mortgage $mortgage) {
        return view('public.mortgages.show', compact('mortgage'));
    }
}