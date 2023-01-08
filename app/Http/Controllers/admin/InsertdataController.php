<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Blog;
use App\Models\Blogcat;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Ourcause;
use App\Models\Sponsor;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class InsertdataController extends Controller
{
    //
    public function addsponsordb(Request $req)
    {
        if (Session::get('user')['id']) {
        $companytable = new Sponsor;
        $companytable->company_name = $req->company_name;

        if ($req->input("company_website")) {
            $companytable->company_website = $req->company_website;
        }

        if ($req->input("company_location")) {
            $companytable->company_location = $req->company_location;
        }
        if ($req->hasFile('company_logo')) {
            $file = $req->file("company_logo");
            $extention = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extention;
            $file->move('sponsor/', $filename);
            $companytable->company_logo = $filename;
        }
        $companytable->save();


        return redirect("sponsors")->with("status", "Successfull");
    }else{
        return redirect('/');
    }
    }

    public function addeventtodb(Request $req)
    {
        if (Session::get('user')['id']) {
        $eventtable = new Event;
        $eventtable->event_name = $req->event_name;
        $eventtable->event_location = $req->event_location;
        $eventtable->event_date = $req->event_date;
        $eventtable->event_time = $req->event_time;
        $eventtable->settime = $req->settime;

        $eventtable->event_info = $req->event_info;
        if ($req->hasFile('event_img')) {
            $file = $req->file("event_img");
            $extention = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extention;
            $file->move('event/', $filename);
            $eventtable->event_img = $filename;
        }
        $eventtable->save();
        return redirect("addvent")->with("status", "Successful");
    }else{
        return redirect('/');
    }
    }

    public function ourcausettodb(Request $req)
    {
        // return "our";
        if (Session::get('user')['id']) {
        $causetable = new Ourcause;
        $causetable->name = $req->name;
        $causetable->description = $req->description;
        if ($req->hasFile('image')) {
            $file = $req->file("image");
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('causeimg/', $filename);
            $causetable->image = $filename;
        } else {
            return redirect()->back()->with("status", "Image is required");
        }
        $causetable->save();
        return redirect("ourcauses")->with("status", "Successful");
    }else{
        return redirect('/');
    }
    }
    public function aboutustodb(Request $req)
    {
        # code...
        if (Session::get('user')['id']) {
        $about = new Aboutus;
        if ($req->input("title")) {
            $about->title = $req->title;
        }
        $about->about = $req->about;
        $about->save();
        return redirect('admin_aboutus')->with('status', 'Success');
    }else{
        return redirect('/');
    }
    }

    public function addcategorytodb(Request $req)
    {
        if (Session::get('user')['id']) {
        $blogcart = new Blogcat;
        $blogcart->title = $req->title;
        $blogcart->save();
        return redirect('blogcategorytable')->with('status', 'Success');
        }else{
            return redirect('/');
        }
    }

    public function insertblog(Request $req)
    {
        if (Session::get('user')['id']) {
        $blog = new Blog;
        $blog->blogtitle = $req->blogtitle;
        $blog->cat_id = $req->cat_id;
        if ($req->hasFile('image')) {
            $file = $req->file("image");
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('blog/', $filename);
            $blog->image = $filename;
        }
        $blog->bloginfo = $req->bloginfo;
        $blog->save();
        return redirect('blogtable')->with('status', 'Success');
    }else{
        return redirect('/');
    }
    }

    public function insertgallery(Request $req)
    {
        if (Session::get('user')['id']) {
        $g = new Gallery;
        $g->title = $req->title;

        $file = $req->file("image");
        $extention = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extention;
        $file->move('gallery/', $filename);
        $g->image = $filename;
        $g->save();
        return redirect('admingallery')->with('status', 'Success');
        }else{
            return redirect('/');
        }
    }


    public function insertvideo(Request $req)
    {
        if (Session::get('user')['id']) {
        $video=new Video;
        $video->title=$req->title;
        $video->video=$req->video;
        $video->save();
        return redirect('admin_videos')->with('status', 'Success');
        }else{
            return redirect('/');
        }
    }
}
