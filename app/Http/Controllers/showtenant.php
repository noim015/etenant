<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;


class showtenant extends Controller
{
    




    public function show($id)
    {
        $post = User::find($id);
        return view('tenantsdata')->with('id', $post);
    }







}
