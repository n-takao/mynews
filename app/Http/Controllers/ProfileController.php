<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

use App\Profil;

class ProfileController extends Controller
{
    public function index(request $request)
    {
        $posts = Profile::all()->sortByDesc('update_at');
        
        if (count($posts) > 0) {
            $headline = $posts->shift();
        }else {
            $headline = null;
        }
         return view('profile.index', ['headline' => $headline, 'posts' => $posts]);
    }

    }

