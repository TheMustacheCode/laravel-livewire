<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function create()
    {
        $countries = Country::all();

        return view('dropdown-page', compact('countries'));
    }

    public function select2()
    {
        $countries = Country::all();

        return view('select2-page', compact('countries'));
    }

    public function store(Request $request)
    {

    }

}
