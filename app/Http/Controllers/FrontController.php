<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Contact;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class FrontController extends Controller
{
  public function index(){
    $blog = Post::orderBy('id', 'desc')->paginate(3);
    return view('frontend.index', compact('blog'));
  }

  public function about(){
      return view('frontend.about');
  }

  public function service(){
    return view('frontend.service');
  }

  public function terms(){
    return view('frontend.terms');
  }

  public function blog(){
    $post = Post::orderBy('id', 'desc')->paginate(6);
    return view('frontend.blog', compact('post'));
  }


  public function blog_detail(Post $post){
    return view('frontend.blog_details', compact('post'));
  }

  public function contact(){
      return view('frontend.contact');
  }

  public function contactMessage(Request $request){
     $request->validate([ 
        'name'=>['required', 'string'],
        'email'=>['required', 'string'],
        'phone'=>['required', 'string'],
        'subject'=>['required', 'string'],
        'message'=>['required', 'string'],
     ]);

     $message = new Contact;
     $message->name = $request->name;
     $message->email = $request->email;
     $message->phone = $request->phone;
     $message->subject = $request->subject;
     $message->message = $request->message;
    
     if($message->save()){
        Mail::to('info@blueheightconsult.com')->send(new SendMail($message));
        Alert::success('Successfully Sent');
        return back();
    }else{
        Alert::error('Something went worry');
        return back();
    }

  }
}
