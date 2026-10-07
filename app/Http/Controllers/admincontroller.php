<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactdetail;
use App\Models\Song;
class admincontroller extends Controller
{

    public function datatransfer(Request $req){
          $user = new Contactdetail();
       $user->name = $req->username;
     $user->email = $req->useremail;
      $user->reason = $req->userreason;
     $user->comment = $req->comment;
     $user->save();
     $message = "Form has been submitted";
     
 return redirect()->back()->with('message', 'Form has been submitted');

    }
    

public function showusers(){
    $users = new Contactdetail();
    $allusers = $users->all();
    return view('admin',compact('allusers'));
}

public function uploadsong(Request $req){
      $upload = new Song();
    $upload->name = $req->songname;
     $upload->artist = $req->artist;
      $upload->image = $req->image;
      $upload->audio = $req->song;
       $upload->category = $req->category;
      $upload->save();
      return view('user.songupload');

}



    //
}
