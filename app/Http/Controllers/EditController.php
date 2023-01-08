<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use App\Models\Blogcat;
use Illuminate\Http\Request;

class EditController extends Controller
{
    //
    public function editabout($id)
    {
        $editabout = Aboutus::find($id);
        return view('admin.editabout', ['editabout' => $editabout]);
    }

    public function inserteditaboutu(Request $req, $id)
    {

        $editabout = Aboutus::find($id);
        $editabout->title = $req->title;
        $editabout->about = $req->about;
        $editabout->update();
        return redirect('admin_aboutus')->with('status', 'Success');
    }
public function editcat($id)
{
   $edicat=Blogcat::find($id);
   return view('admin.editcat',['editcat'=>$edicat]);
}
    public function inserteditcat(Request $req,$id)
    {
       $updatecat=Blogcat::find($id);
       $updatecat->title=$req->title;
       $updatecat->update();
        return redirect('blogcategorytable')->with('status', 'Success');
    }
}
