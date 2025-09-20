<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Language;
use App\Models\Blog;
use App\Models\BlogSlider;
use App\Models\About;
use App\Models\Menu;
use App\Models\Office;
use App\Models\Page;
use App\Models\Brand;
use App\Models\Club;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductGallery;
use App\Models\ProductImage;
use App\Models\ProductFaq;
use App\Models\ProductType;
use App\Models\ProductFeature;
use App\Models\CatalogGroup;
use App\Models\Catalog;
use App\Models\CatalogFile;
use App\Models\Country;
use App\Models\Continent;
use App\Models\Project;
use App\Models\ProjectGallery;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        //dd($_SERVER['DOCUMENT_ROOT']);
        $sliders = Slider::where('lang', app()->getLocale())->get();
        $languages = Language::all();
        $about = About::where('lang', app()->getLocale())->first();
        $about_sliders = DB::table('about_slider')->where('lang', app()->getLocale())->get();
        $about_certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get();
        $products = // Get products with related category
            Product::where('lang', app()->getLocale())
            ->with(['category' => function ($q) {
                $q->where('lang', app()->getLocale());
            }])
            ->get();
        $clubs = Club::where('lang', app()->getLocale())->get();
        $countries = Country::where('lang', app()->getLocale())// with continent data
            ->with('continent')
            ->get()
            ->map(function ($country) {
                return [
                    'title' => $country->title,
                    'code' => $country->code,
                    'left' => $country->left,
                    'top' => $country->top,
                    'continent_title' => $country->continent ? $country->continent->title : null,
                    'continent_class' => $country->continent ? $country->continent->class : null,
                ];
            })
            ->toArray();
        $blog = Blog::where('lang', app()->getLocale())->limit(5)->get()->toArray();
        //dd($blog);
        $continents = Continent::where('lang', app()->getLocale())->with('countries')->get()->toArray();

        return view('home', compact('sliders', 'languages', 'about', 'about_sliders', 'about_certificates', 'products', 'clubs', 'countries', 'continents', 'blog'));
    }

    public function route($slug, $slug2 = null)
    {
        $menu = Menu::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->firstOrFail();
        
        // If the menu item has a page_type of 'about', fetch the about data
        if($menu->page_type == 'about') {
            $about = About::where('lang', app()->getLocale())->first();
            $about_slider = DB::table('about_slider')->where('lang', app()->getLocale())->get()->toArray();
            $how_we_do = DB::table('about_how_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $what_we_do =  DB::table('about_what_we_do')->where('lang', app()->getLocale())->get()->toArray();
            $certificates = DB::table('about_certificates')->where('lang', app()->getLocale())->get()->toArray();
            $brands = Brand::where('lang', app()->getLocale())->get();
            //debug($certificates);
            
            //dd($politics);
            return view('about', compact('about', 'how_we_do', 'what_we_do', 'certificates', 'about_slider', 'brands'));
        }

        if($menu->page_type == 'product_category') {
            if($slug2 == null) {
                
                $category = ProductCategory::where(['seo_url' => $slug, 'lang' => app()->getLocale()])->first();
                $products = Product::where(['lang' => app()->getLocale(), 'category_id' => $category->category_id])->with(['images', 'category'])->get();
                //dd($products);
                return view('product_category', compact('category', 'products', 'menu'));

            } else {
                $product = Product::where(['seo_url' => $slug2, 'lang' => app()->getLocale()])->with(['category', 'gallery', 'faqs', 'types', 'images', 'features'])->firstOrFail();
                //dd($product);
                return view('product', compact('product'));
            }
        }

        

        if($menu->page_type == 'club') {
            $club = Club::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->with(['sliders1', 'sliders2', 'sliders3', 'features', 'faqs'])->firstOrFail();
            //dd($club);
            return view('club', compact('club'));

        }

        if($menu->page_type == 'project') {

            if($slug2 == null) {
                
                //$projects = Project::where(['lang' => app()->getLocale()])->with(['gallery'])->get();
                $projects = Project::where(['lang' => app()->getLocale()])->with(['gallery', 'country', 'country.continent'])->get();
                //dd($projects);
                return view('projects', compact('projects'));

            }else{
                $slug = $slug2;
                // Get project with related gallery images, and find project country and continent from countries table
                
                $project = Project::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->with(['gallery', 'country', 'country.continent'])->firstOrFail();
                //dd($project);
                // Get products for "Used Products" section, limit 3, product_ids should be in array from $project->used_products string(1,3,5)
                // where product_id in (1,3,5) and lang = app()->getLocale()
                // Also get product category data

                $used_product_ids = array_map('trim', explode(',', $project->used_products));
                //dd($used_product_ids);
                $products = Product::where(['lang' => app()->getLocale()])
                    ->whereIn('product_id', $used_product_ids)
                    ->with(['category' => function ($q) {
                        $q->where('lang', app()->getLocale());
                    }])
                    ->limit(5)->get();
                //dd($products);
                return view('project', compact('project', 'products'));
            }

        }

        if($menu->page_type == 'blog') {
            if($slug2!= null) {
                // Get blog posts limit 5 as array
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(5)->get();
                //dd($blogs);
                $blog = Blog::where(['lang' => app()->getLocale(), 'seo_url' => $slug2])->firstOrFail();
                $blogSlider = BlogSlider::where(['lang' => app()->getLocale(), 'blog_id' => $blog->blog_id])->get();
                //dd($blogSlider);
                return view('blog-detail', compact('blog', 'blogs', 'blogSlider'));
            }else{
                $blogs = Blog::where(['lang' => app()->getLocale()])->limit(5)->get();
                //dd($blogs);
                return view('blog', compact('blogs'));
            }
        }

        if($menu->page_type == 'contact') {
            $offices = Office::where(['lang' => app()->getLocale()])->get();
            return view('contact', compact('offices'));
        }

        if($menu->page_type == 'page') {
            $page = Page::where(['lang' => app()->getLocale(), 'seo_url' => $slug])->first();
            //dd($page);
            return view('page', compact('page'));
        }

        //return view('page', compact('page'));
    }
}