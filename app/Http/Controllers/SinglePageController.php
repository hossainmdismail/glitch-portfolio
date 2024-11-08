<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;

class SinglePageController extends Controller
{
    public function about()
    {
        $partner = Partner::get();
        return view('themes.default.pages.about', [
            'partners' => $partner
        ]);
    }
    public function contact()
    {
        return view('themes.default.pages.contact');
    }
}
