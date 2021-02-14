<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /*
    * @Create Item
    */
    public function create(Request $request)
    {
    	return response()->json($request->item);
    }
}
