<?php

namespace App\Http\Controllers;

use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $statuses = Status::all();

        return response()->json($statuses);
    }
}
