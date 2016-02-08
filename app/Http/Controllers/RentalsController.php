<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Rental;

class RentalsController extends ApiController
{

    /**
     * @return mixed
     */
    public function index()
    {
        $rentals = Rental::all();
        return $this->respond([
            'rentals' => $rentals
        ]);
    }

    /**
     * @param  integer
     * @return mixed
     */
    public function show($id)
    {
        $rental = Rental::find($id);

        if (! $rental)
        {
            return $this->respondNotFound('Rental listing not found.');
        }

        return $this->respond([
            'data' => $rental
        ]);
    }

    public function store()
    {
        dd('store');
    }

}
