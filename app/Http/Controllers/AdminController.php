<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $jobs = DB::table('jobs')->count();

        return view('admin.index', compact('jobs'));
    }
}
