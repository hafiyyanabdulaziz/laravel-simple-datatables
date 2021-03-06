<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function json()
    {
        $user = User::all();
        //return ResponseFormatter::success(Datatables::of($user)->make()->getData());
        //return ResponseFormatter::success($test->getData());
        return Datatables::of($user)->make();
    }

    public function index()
    {
        return view('list_users');
    }
}
