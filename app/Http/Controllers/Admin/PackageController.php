<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\destination;
use App\package;
use Illuminate\Http\Request;

class PackageController extends Controller
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
        $dests = destination::all();
        $packages = package::orderBy('id','desc')->get();
        return view('admin.package-table',['packages'=>$packages],['dests'=>$dests]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dest = destination::all();
        return view('admin.package-form',compact('dest'));
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
            'brief'=>'required',
            'description'=>'required'
        ]);

        $image=null;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('user/packageimg',$image);
        }
        package::create([
            'destination_id'=>$request->get('destination_id'),
            'title'=>$request->get('title'),
            'image'=>$image,
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
            'duration'=>$request->get('duration'),
            'itinerary'=>$request->get('itinerary'),
            'price'=>$request->get('price'),
            'priceinclude'=>$request->get('priceinclude'),
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
        $destinations = destination::all();
        $package = package::where('id',$id)->first();
        return view('admin.edit-package', compact('package','destinations'));
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
        $updatepackage=package::find($id);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $image=mt_rand(1001,99999).'_'.$file->getClientOriginalName();
            $file->move('user/packageimg',$image);
            $updatepackage->image=$image;
        }
        $updatepackage->update([
            'destination_id'=>$request->get('destination_id'),
            'title'=>$request->get('title'),
            'brief'=>$request->get('brief'),
            'description'=>$request->get('description'),
            'duration'=>$request->get('duration'),
            'itinerary'=>$request->get('itinerary'),
            'price'=>$request->get('price'),
            'priceinclude'=>$request->get('priceinclude')
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
        $del=package::find($id);
        $del->delete();
        return redirect()->back();
        $request->session()->flash('msg','Data deleted successfully');
    }
}
