<?php

namespace App\Http\Controllers;
use App\review;
use App\destination;
use App\package;
use DB;
use Illuminate\Http\Request;
use App\Model\Admin\book;

class FrontController extends Controller
{
    public function index()
    {
        $dest = destination::all();
        $packages = package::all();
        $reviews = review::all();
        return view('front.home', compact('packages','dest','reviews'));
    }

    public function dest()
    {
        return view('front.dest');
    }
    public function package()
    {
        return view('front.packagepage');
    }

    public function alldest()
    {
        $dest = destination::all();
        $destinations = DB::table('destinations')->paginate(9);
        // $destinations = alldest::all()->paginate(10);
        return view('front.alldest', compact('destinations','dest'));
    }

     public function showdest($id)
    {
        $reviews = review::all();
        $packages = package::all();
        $dests = destination::all();
        $dest = destination::all();
        $destinations = destination::findOrFail($id);
        return view('front.dest', compact('destinations','dest','dests','packages','reviews'));
    }

    public function allpackage()
    {
        $dest = destination::all();
        $packages = package::all();
        $packages = DB::table('packages')->paginate(10);
        // $packages = alldest::all()->paginate(10);
        return view('front.allpackage', compact('packages','packages','dest'));
    }

     public function showpackage($id)
    {
        $reviews = review::all();
        $dests = destination::all();
        $dest = destination::all();
        $packages = package::findOrFail($id);
        return view('front.packagepage', compact('packages','dest','dests','reviews'));
    }

    public function book()
    {
        $dest = destination::all();
        return view('front.book', compact('dest'));
    }

    public function about()
    {
        $dest = destination::all();
        return view('front.about', compact('dest'));
    }
    public function contact()
    {
        $dest = destination::all();
        return view('front.contact', compact('dest'));
    }
    public function extras()
    {
        $dest = destination::all();
        return view('front.extra', compact('dest'));
    }

    public function reviews()
    {
        $dest = destination::all();
        $reviews = review::all();
        return view('front.review', compact('reviews','dest'));
    }

     public function storebook(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'destination'=>'required',
            'num'=>'required',
            'phone'=>'required'
        ]);

        $books = new book;
        $books->name = $request->name;
        $books->email = $request->email;
        $books->destination = $request->destination;
        $books->num = $request->num;
        $books->phone = $request->phone;
        $books->message = $request->message;
        $books->save();

        return redirect()->back();
    }
    
     public function storereview(Request $request)
        {
            $this->validate($request,[
                'name'=>'required',
                'reviews'=>'required'
            ]);

            $reviews = new review;
            $reviews->name = $request->name;
            $reviews->reviews = $request->reviews;
            $reviews->save();

            return redirect()->back();
        }

}
