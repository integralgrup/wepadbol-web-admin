<?php

namespace App\Http\Controllers;

use App\Models\Menu; // or any model you want indexed
use App\Models\Blog;
use App\Models\CareerJob;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $menus = Menu::latest()->where('lang', app()->getLocale())->get();

        $blogs = Blog::latest()->where('lang', app()->getLocale())->get();

        return response()
            ->view('sitemap.index', compact('menus', 'blogs', ))
            ->header('Content-Type', 'application/xml');
    }
}
