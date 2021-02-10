<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:web');
    }

    public function index()
    {
        $destinations = destination::orderBy('id','desc')->get();
        return view('admin.destination-table',['destinations'=>$destinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.destination-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'description'=>'required'
        ]);

        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('user/destinationimg',$image);
        }
        destination::create([
            'title'=>$request->get('title'),
            'image'=>$image,
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
            'duration'=>$request->get('duration'),
            'itinerary'=>$request->get('itinerary'),
            'price'=>$request->get('price'),
            'priceinclude'=>$request->get('priceinclude'),
            'gallery'=>$request->get('gallery'),
            'banner'=>$request->get('banner'),
            'nav'=>$request->get('nav')
        ]);

        $request->session()->flash('msg','Data added successfully');
        return redirect()->back();
    }

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
        $destination = destination::where('id',$id)->first();
        return view('admin.edit-destination', compact('destination'));
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
            'title'=>'required',
             'brief'=>'required',
            'description'=>'required',
        ]);
        $updatedestination=destination::find($id);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('user/destinationimg',$image);
            $updatedestination->image=$image;
        }
        $updatedestination->update([
            'title'=>$request->get('title'),
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
            'duration'=>$request->get('duration'),
            'itinerary'=>$request->get('itinerary'),
            'price'=>$request->get('price'),
            'priceinclude'=>$request->get('priceinclude'),
            'gallery'=>$request->get('gallery'),
            'banner'=>$request->get('banner'),
            'nav'=>$request->get('nav')
        ]);

        $request->session()->flash('msg','Data updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=destination::find($id);
        $del->delete();
        return redirect()->back();
        $request->session()->flash('msg','Data deleted successfully');
    }
}
