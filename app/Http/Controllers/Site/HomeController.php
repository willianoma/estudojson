<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function getIndex()
    {
        return view('site.home.index');
    }

    public function getContato()
    {
        return 'Contato site';
    }

    public function getSobre()
    {
        return view('site.sobre.index');

    }

    public function missingMethod($parameters = [])
    {
        return view('site.404.index', compact('parameters'));
    }

}
