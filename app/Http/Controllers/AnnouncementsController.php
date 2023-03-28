<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementsController extends Controller
{

    public function __construct() {
        // Staff Permission Check
        $this->middleware(['permission:view_announcements'])->only('index');
        $this->middleware(['permission:add_announcements'])->only('create');
        $this->middleware(['permission:edit_announcements'])->only('edit');
        $this->middleware(['permission:delete_announcements'])->only('destroy');
        $this->middleware(['permission:publish_announcements'])->only('change_status');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Announcement::orderby('created_at','DESC')->get();
        return view('backend.investor.announcements.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.investor.announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $slug = str_replace(' ','-',$request->title);
                $slug = str_replace('/','-',$slug);
                $d = new Announcement;
                $d->title = $request->title;
                $d->slug = $slug;
                $d->description = $request->description;
                $d->save();
                flash(translate('Announcements has been inserted successfully'))->success();
                return redirect()->route('announcements.index');
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

        $data = Announcement::find(base64_decode($id));
        return view('backend.investor.announcements.edit', compact('data'));

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
        $slug = str_replace(' ','-',$request->title);
        $slug2 = str_replace('/','-',$slug);
        $d = Announcement::find(base64_decode($id));
        $d->title = $request->title;
        $d->slug = $slug2;
        $d->description = $request->description;
        $d->save();

        flash(translate('Announcements has been updated successfully'))->success();
        return redirect()->route('announcements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Announcement::findOrFail(base64_decode($id));
        if(Announcement::destroy(base64_decode($id))){
            //unlink($slider->photo);
            flash(translate('Announcements has been deleted successfully'))->success();
        }
        else{
            flash(translate('Something went wrong'))->error();
        }
        return redirect()->route('announcements.index');
    }
}
