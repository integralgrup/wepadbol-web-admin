<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'blog_id' => 'required',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $ip = $request->ip();

        Rating::updateOrCreate(
            [
                'blog_id' => $request->blog_id,
                'ip_address' => $ip,
            ],
            [
                'rating' => $request->rating,
            ]
        );

        $average = Rating::where('blog_id', $request->blog_id)->avg('rating');
        $count   = Rating::where('blog_id', $request->blog_id)->count();

        return response()->json([
            'average' => round($average, 1),
            'count' => $count,
        ]);
    }
}
