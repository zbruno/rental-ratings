<?php namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function show()
    {
        $people = ['Zach', 'Jeremy', 'Glenn'];

        return view('guest.home', compact('people'));
    }
}
