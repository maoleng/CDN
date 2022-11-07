<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        return view('link');
    }

    public function store(StoreLinkRequest $request)
    {
        $data = $request->validated();
        dd($data);

    }
}
