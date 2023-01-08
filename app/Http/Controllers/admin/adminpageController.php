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

class adminpageController extends Controller
{
  public function addvent()
  {
    if(Session::get('user')['id']){
            $eventtable = Event::all();
            return view('admin.addvent', ["eventtable" => $eventtable]);
    }else{
        return redirect('/');
    }

  }

  public function dashboard()
  {
        if (Session::get('user')['id']){
            return view("admin.dashboard");
        }else{
            return redirect('/');
        }

  }

  public function sponsors()
  {
        if (Session::get('user')['id']) {
    $seesponsor = Sponsor::all();
    return view("admin.sponsors", ['seesponsor' => $seesponsor]);
        }else{
            return redirect('/');
        }
  }

  public function addeventform()
  {
        if (Session::get('user')['id']) {
    return view('admin.addeventform');
        }else{
            return redirect('/');
        }
  }

  public function addsponsorform()
  {
        if (Session::get('user')['id']) {
    return view("admin.addsponsorform");
        }else{
            return redirect('/');
        }
  }

  public function ourcauses()
  {
        if (Session::get('user')['id']) {
    $causestable = Ourcause::all();

    return view("admin.ourcauses", ['ourc' => $causestable]);
        }else{
            return redirect('/');
        }
  }

  public function ourcausesform()
  {
        if (Session::get('user')['id']) {
    return view("admin.ourcausesform");
        }else{
            return redirect('/');
        }
  }

  public function admin_aboutus()
  {
        if (Session::get('user')['id']) {
    $about = Aboutus::orderBy('id', 'DESC')->get();
    return view('admin.admin_aboutus', ['about' => $about]);
        }else{
            return redirect('/');
        }
  }

  public function abouusform()
  {
        if (Session::get('user')['id']) {
    return view('admin.abouusform');
        }else{
            return redirect('/');
        }
  }

  public function blogtable()
  {
        if (Session::get('user')['id']) {
    $blog = Blog::orderBy('id', 'DESC')->get();
    return view('admin.blogtable', ['blog' => $blog]);
        }else{
            return redirect('/');
        }
  }

  public function blogform()
  {
        if (Session::get('user')['id']) {
    $cat = Blogcat::all();
    return view('admin.blogform', ['cat' => $cat]);
        }else{
            return redirect('/');
        }
  }

  public function blogcategorytable()
  {
        if (Session::get('user')['id']) {
    $cat=Blogcat::orderBy("id",'DESC')->get();
    return view('admin.blogcategorytable',['cat'=>$cat]);
        }else{
            return redirect('/');
        }
  }

  public function blogcategory()
  {
        if (Session::get('user')['id']) {
    return view('admin.blogcategory');
        }else{
            return redirect('/');
        }
  }

  public function admingallery()
  {
        if (Session::get('user')['id']) {
    $g=Gallery::orderBy('id','DESC')->get();
    return view('admin.admingallery',['g'=>$g]);
        }else{
            return redirect('/');
        }
  }

  public function galleryform()
  {
        if (Session::get('user')['id']) {
    return view('admin.galleryform');
        }else{
            return redirect('/');
        }
  }

  public function seosettings()
  {
        if (Session::get('user')['id']) {
    return view('admin.seosettings');
        }else{
            return redirect('/');
        }
  }

  public function admin_videos()
  {
        if (Session::get('user')['id']) {
        $video = Video::orderBy('id', 'DESC')->get();
    return view('admin.admin_videos',['video'=> $video]);
        }else{
            return redirect('/');
        }
  }

  public function admin_video_add()
  {
        if (Session::get('user')['id']) {
    return view('admin.admin_video_add');
        }else{
            return redirect('/');
        }
  }
}
