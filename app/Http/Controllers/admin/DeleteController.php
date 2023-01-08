<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Aboutus;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Ourcause;
use App\Models\Sponsor;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class DeleteController extends Controller
{
    public function deletcompany($id)
    {
        if (Session::get('user')['id']) {
        $chechdeletesp = Sponsor::find($id);
        if ($chechdeletesp) {
            $chechdeletesp->delete();
            return redirect()->back()->with("status", "Deleted");
        } else {
            return redirect()->back()->with("status", "Not found");
        }
    }else{
        return redirect('/');
    }
    }

    public function deleteevnt($id)
    {
        if (Session::get('user')['id']) {
        $deleteevnt = Event::find($id);
        $eventimg = 'event/' . $deleteevnt->image;
        if ($eventimg == true) {
            $deleteevnt = File::delete($eventimg);

            Event::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        } else {
            Event::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        }
    }else{
        return redirect('/');
    }
    }

    public function deletcause($id)
    {
        if (Session::get('user')['id']) {
        $deletecause = Ourcause::find($id);
        $eventimg = 'causeimg/' . $deletecause->image;
        if ($eventimg == true) {
            $deletecause = File::delete($eventimg);

            Ourcause::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        } else {
            Ourcause::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        }
    }else{
        return redirect('/');
    }
    }
    public function deletabout($id)
    {
        if (Session::get('user')['id']) {
        Aboutus::destroy($id);
        return redirect()->back()->with('status', 'Deleted');
        }else{
            return redirect('/');
        }
    }

    public function deletblog($id)
    {
        if (Session::get('user')['id']) {
        $deleteblog = Blog::find($id);
        $blogimg = 'blog/' . $deleteblog->image;
        if ($blogimg == true) {
            $deleteblog = File::delete($blogimg);

            Blog::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        } else {
            Blog::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        }
    }else{
        return redirect('/');
    }
    }

    public function deletgallery($id)
    {
        if (Session::get('user')['id']) {
        $deleteg=Gallery::find($id);
        $galleryimg = 'blog/' . $deleteg->image;
        if ($galleryimg == true) {
            $deleteg = File::delete($galleryimg);

            Gallery::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        } else {
            Gallery::destroy($id);
            return redirect()->back()->with('status', 'Deleted');
        }
    }else{
        return redirect('/');
    }
    }

    public function deletev($id)
    {
        Video::destroy($id);
        return redirect()->back()->with('status', 'Deleted');
    }
}
