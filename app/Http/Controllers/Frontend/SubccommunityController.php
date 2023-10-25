<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SubccommunityController extends Controller
{
    function show($slug)
    {
        $subcommunity = Community::where('slug', $slug)->first();


        return Inertia::render('SubCommunities/Show', compact('subcommunity'));
    }
}
