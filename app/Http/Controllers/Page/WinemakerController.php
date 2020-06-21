<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Winemaker;

class WinemakerController extends Controller
{
    public function index()
    {
        $winemakers = Winemaker::where('status', '=', 'ACTIVE')->get();
        return view('page.winemaker.index', [
            'winemakers' => $winemakers
        ]);
    }

    public function personal_wine()
    {
        $winemakers = Winemaker::where('status', '=', 'ACTIVE')->get();
        return view('page.winemaker.personal', [
            'winemakers' => $winemakers
        ]);
    }
}
