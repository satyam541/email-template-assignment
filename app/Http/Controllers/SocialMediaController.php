<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['socialMedias']    =   SocialMedia::all();

        return view("admin.socialMedia.list", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['socialMedia']    =   new SocialMedia();
        $data['url']        =   route("socialmedia.store");
        $data['method']     =   "POST";
        return view("admin.socialMedia.form", $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SocialMedia::create($request->all());
        Session::flash('success','socialMedia Added');
        return redirect(route("socialmedia.index"));
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
        $data['socialMedia']    =   SocialMedia::findOrFail($id);
        $data['url']        =   route("socialmedia.update", ['socialmedia' => $id]);
        $data['method']     =   "PUT";
        return view("admin.socialMedia.form", $data);
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
        SocialMedia::findOrFail($id)->update($request->all());
        Session::flash('success','socialMedia Updated');
        return redirect(route("socialmedia.index"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
