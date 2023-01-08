<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Blog;
use App\Models\Blogcat;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Ourcause;
use App\Models\Paymentchecker;
use App\Models\Sponsor;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index()
    {

        $str = "gftywbikamnvcsxzoplJGFcqsza";
        $str = str_shuffle($str);
        $str = substr($str, 5);
        $checku = new Paymentchecker;
        $checkexist = Paymentchecker::where('userip', request()->ip())->first();
        if (!$checkexist) {
            $checku->userip = request()->ip();
            $checku->usercode = $str;
            $checku->save();
        }
        $getgallery = Gallery::orderBy('id', 'DESC')->get();
        $causestable = Ourcause::orderBy('id', 'DESC')->get();
        $checkexists = Paymentchecker::where('userip', request()->ip())->first();
        $today = Carbon::today();
        $eventtable = Event::where("event_date", ">", $today)->orderBy('id', 'DESC')->get();
        $allevent = Event::orderBy('id', 'DESC')->get();
        $sponsor = Sponsor::all();
        // $today = Carbon::now()->addDay(2);

        return view('frontend.index', ['getgallery' => $getgallery, 'checkexist' => $checkexists, 'sponsor' => $sponsor, "allevent" => $allevent, "today" => $today, "causestable" => $causestable, "event" => $eventtable]);
    }
    public function details($id)
    {
        # code...
        //$causesd=Ourcause::where('id',$id)->get();
        $causesd = Ourcause::find($id);
        return view('frontend.details', ["causesd" => $causesd]);
    }
    public function about_us()
    {
        $about = Aboutus::all();
        return view('frontend.about_us', ['about' => $about]);
    }

    public function contact_us()
    {
        return view('frontend.contact_us');
    }
    public function viewevent($id)
    {
        $seeevent = Event::find($id);
        return view('frontend.viewevent', ['seeevent' => $seeevent]);
    }

    public function ourblog()
    {
        $blog = Blog::orderBy('id', 'DESC')->get();
        $blogcat = Blogcat::all();
        return view('frontend.ourblog', ['blogcat' => $blogcat, 'blog' => $blog]);
    }

    public function blogdetails($id)
    {
        $blogdetails = Blog::find($id);
        return view('frontend.blogdetails', ['blogdetails' => $blogdetails]);
    }

    public function getblogcat($id)
    {
        $blogcat = Blogcat::all();
        $getallblogcat = Blog::where('cat_id', $id)->get();

        return view('frontend.getblogcat', ['blogcat' => $blogcat, 'getallblogcat' => $getallblogcat]);
    }

    public function ourgallery()
    {
        $gallery = Gallery::orderBy('id', 'DESC')->get();
        return view('frontend.ourgallery', ['gallery' => $gallery]);
    }

    public function donation()
    {
        $checkexists = Paymentchecker::where('userip', request()->ip())->first();
       return view('frontend.donation',['checkexist' => $checkexists]);
    }

    public function event_videos()
    {
        $video = Video::orderBy('id','DESC')->get();
        return view('frontend.event_videos', ['video'=> $video]);
    }
}
