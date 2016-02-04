<?php

namespace App\Http\Controllers;

use App\Pothole;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;


class PotholesController extends Controller
{

    public function create()
        {

        }



    public function store()
    {
        $input = Request::all();
        $input['urgency'] = setUrgency($input['size']);

        $address = explodeAddress($input['street']);


        $input['street'] = $address[0];
        $input['district'] = $address[1];
        $input['status'] = 'Not Repaired';
        Pothole::create($input);
        return redirect('/');
    }
}


