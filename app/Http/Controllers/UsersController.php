<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function show()
    {
        if(auth()->user()->level == 'member')
        {
            return redirect('/');
        }

        $users = DB::table('users')->paginate(3);

        return view('admin.users',['users' => $users]);
    }
}
