<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\users;

class LaboranteController extends Controller
{
    public function index(){
        $users = user::orderBy('id', 'DESC')->paginate();
        return view('users.index', compact('users'));
    }

}
