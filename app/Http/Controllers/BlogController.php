<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Headline;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Setting;

class BlogController extends Controller
{
    public function index(Post $posts)
    {
        $head = Headline::all();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $data = $posts->orderBy('created_at', 'desc')->paginate(10);
        return view('blog', compact('data', 'category_menu', 'head', 'site_logo', 'company_name'));
    }
    public function article_blog($slug)
    {
        $site_logo = Setting::where('key', 'site.logo')->first();
        $category_menu = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('blog.post', compact('data', 'category_menu', 'site_logo'));
    }
    public function head_blog($slug)
    {
        $site_logo = Setting::where('key', 'site.logo')->first();
        $category_menu = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('blog.headline', compact('data', 'category_menu', 'site_logo'));
    }
    public function list_category(category $category)
    {
        $site_logo = Setting::where('key', 'site.logo')->first();
        $category_menu = Category::all();
        $data = $category->posts()->paginate(15);
        return view('blog.list_category', compact('data', 'category_menu', 'site_logo'));
    }
    public function search(Request $request)
    {
        $category_menu = Category::all();
        $head = Headline::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $data = Post::where('title', $request->search)->orWhere('title', 'like', '%' . $request->search . '%')->paginate(6);
        return view('blog', compact('data', 'category_menu', 'head', 'site_logo'));
    }
    public function about()
    {
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $company_description = Setting::where('key', 'company.company.company_description')->first();
        $data = Post::all();
        return view('blog.about', compact('company_name', 'category_menu', 'data', 'site_logo', 'company_description'));
    }
    public function contact()
    {
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $company_description_contact = Setting::where('key', 'company.company.company_description_contact')->first();
        $company_contact = Setting::where('key', 'company.company.company_telephone')->first();
        $data = Post::all();
        return view('blog.contact', compact('company_name', 'category_menu', 'data', 'site_logo', 'company_description_contact','company_contact'));
    }

     public function media_siber()
    {
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $company_siber = Setting::where('key', 'company.company.company_cyber_media_guidelines')->first();
        $data = Post::all();
        return view('blog.media_siber', compact('company_name', 'category_menu', 'company_siber', 'data', 'site_logo'));
    }
      public function advertisement()
    {
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $company_advertisement = Setting::where('key', 'company.company.company_advertisement')->first();
        $data = Post::all();
        return view('blog.advertisement', compact('company_name', 'category_menu', 'company_advertisement', 'data', 'site_logo'));
    }
     public function privacy()
    {
        $category_menu = Category::all();
        $site_logo = Setting::where('key', 'site.logo')->first();
        $company_name = Setting::where('key', 'company.company.company_name')->first();
        $company_privacy = Setting::where('key', 'company.company.company_privacy_policy')->first();
        $data = Post::all();
        return view('blog.privacy', compact('company_name', 'category_menu', 'company_privacy', 'data', 'site_logo'));
    }
}
