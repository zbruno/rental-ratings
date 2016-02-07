<?php namespace App\Http\Controllers;

use DB;
use App\Models\Card;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    public function show(Card $card)
    {
        return $card;
    }
}
