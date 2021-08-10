<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function index($username)
    {
        $user = User::whereUsername($username)->firstOrFail();
        $projects = User::whereUsername($username)->firstOrFail()->projects;
        // dd($projects);
        return view('profile', [
            'projects' => $projects,
            'user' => $user,
        ]);
    }
}
