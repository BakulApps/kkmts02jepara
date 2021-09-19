<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use App\Models\Portal\Category;
use App\Models\Portal\Galery;
use App\Models\Portal\Management;
use App\Models\Portal\Post;
use App\Models\Portal\Section;
use App\Models\Portal\Setting;
use App\Models\Portal\Tag;
use App\Models\Portal\Testimonial;
use Illuminate\Http\Request;

class FrontedController extends Controller
{
    protected $data;

    public function __construct()
    {
        $this->data['setting'] = new Setting();
        $this->data['title'] = 'PORTAL RESMI KKMTs.02 JEPARA';
    }

    public function home()
    {
        $this->data['section']      = new Section();
        $this->data['headline']     = Post::where('post_headlines', 1)->orderBy('created_at', 'DESC')->first();
        $this->data['recentpost']   = Post::where('post_status', 1)->orderBy('created_at', 'DESC')->limit(4)->get();
        $this->data['lastgalery']   = Galery::orderBy('created_at', 'DESC')->first();
        $this->data['lastpost']     = Post::where('post_status', 1)->orderBy('created_at', 'DESC')->first();
        $this->data['management']   = Management::orderBy('management_id', 'DESC')->limit('6')->get();
        $this->data['testimonial']  = Testimonial::orderBy('created_at', 'DESC')->first();
        return view('portal.fronted.home', $this->data);
    }

    public function post_all()
    {
        $this->data['lastcat'] = Category::orderBy('category_id', 'DESC')->limit(5)->get();
        $this->data['posts'] = Post::orderBy('created_at', 'DESC')->paginate(6);
        $this->data['popularpost'] = Post::orderBy('post_read', 'DESC')->limit(4)->get();
        $this->data['category'] = Category::orderBy('category_name', 'ASC')->get();
        $this->data['tag']      = Tag::orderBy('tag_name', 'ASC')->get();
        return view('portal.fronted.post_all', $this->data);
    }
}
