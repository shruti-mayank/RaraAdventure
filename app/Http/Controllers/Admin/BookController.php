<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Admin\alldest;
use App\Model\Admin\book;
use App\Model\Admin\trek;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth:web');
    }
    public function index()
    {
        $books = book::all();
        session()->flash('success', 'Booking Request Sent');
        return view('front.book', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front.book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::where('id',$id)->first();
        return view('admin.index', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'destination'=>'required',
            'num'=>'required',
            'phone'=>'required'
        ]);

        $books = book::find($id);
        $books->name = $request->name;
        $books->email = $request->email;
        $books->destination = $request->destination;
        $books->num = $request->num;
        $books->phone = $request->phone;
        $books->message = $request->message;
        $books->save();

        return redirect(route('book.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $del=book::find($id);
    $del->delete();
        return redirect()->back();
    }
}
