<?php

namespace App\Http\Controllers;

use App\Models\Cooperator;

class CooperatorController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
      $cooperators = Cooperator::all();
      if ($cooperators->isEmpty()) {
        return response()->json(['message' => 'Entities Not Found!'], 404);
      }
      return response()->json($cooperators);
    }

}
